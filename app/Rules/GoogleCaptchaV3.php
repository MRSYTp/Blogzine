<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class GoogleCaptchaV3 implements ValidationRule
{


    public function __construct(
        private ?string $action = null,
        private ?float $minScore = null
    ){}


    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $siteVerify = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify' , [
            'secret' => config('services.google_recaptcha_v3.secretKey'),
            'response' => $value,
        ]);

        $message = [
            'fail'=>'در حال حاضر سیستم اعتبار سنجی گوگل قادر به پاسخگویی و اعتبار سنجی درخواست شما نمی باشد! لحظاتی بعد اقدام کنید.',
              'error'=>'اعتبار سنجی شما توسط سیستم احراز هویت گوگل رد شد ! مجددا تلاش نمایید',
              'failAction'=>'اکشن فرم با اکشن سیستم احراز هویت گوگل تطابق ندارد!',
              'failScore'=>'امتیاز دریافت شده شما از سیستم احراز هویت گوگل پایین تر از حد مجاز است ! مجددا تلاش نمایید.'
  
          ];

        if ($siteVerify->failed()) {
            $fail($message['fail']);
            return;
        }

        if ($siteVerify->successful()) {

            $body = $siteVerify->json();

            if ($body['success'] == false) {
                $fail($message['error']);
                return;
            }

            if (!is_null($this->action) && ($this->action != $body['action']) ) {
                $fail($message['failAction']);
                return;
            }

            if (!is_null($this->minScore) && ($this->minScore > $body['score'])) {
                $fail($message['failScore']);
                return;
            }

        }

    }
}
