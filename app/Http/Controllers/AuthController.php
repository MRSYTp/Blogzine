<?php

namespace App\Http\Controllers;

use App\Events\UserSubscribed;
use App\Models\User;
use Illuminate\Support\Str;
use App\Rules\GoogleCaptchaV3;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Password as FecadesPassword;

class AuthController extends Controller
{
    public function register(Request $request): RedirectResponse
    {
        $fields = $request->validate(
            [
                'name' => ['required', 'min:5', 'max:255'],
                'email' => ['required', 'max:255', 'email', 'unique:users'],
                'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()],
                'g-recaptcha-response' => ['required', new GoogleCaptchaV3('submit', 0.6)]
            ],
            [
                'name.required' => 'نام و نام خانوادگی خود را وارد نمایید!',
                'name.max' => 'نام و نام خانوادگی باید حدااکثر 225 کارکتر باشد!',
                'name.min' => 'نام و نام خانوادگی باید حدااقل 5 کارکتر باشد!',
                'email.required' => 'ایمیل معتبر خود را وارد نمایید!',
                'email.max' => 'ایمیل مورد نظر حداکثر باید ۲۵۵ کارکتر باشد!',
                'email.email' => 'ایمیل معتبر وارد نمایید!',
                'email.unique' => 'قبلا کاربری با این ایمیل ثبت نام کرده است!',
                'password.required' => 'کلمه عبور خود را وارد نمایید!',
                'password.min' => 'کلمه عبور باید حداقل 8 کارکتر باشد!',
                'password.confirmed' => 'کلمه عبور با تکرار آن برابر نیست!',
                'password.mixed' => 'کلمه عبور باید شامل اعداد کارکتر کوچک و بزرگ و کارکترهای ويژه (!@#$%^&*) باشد!',
                'g-recaptcha-response.required' => 'اعتبار سنجی گوگل ریکپچا الزامی است!'
            ]
        );

        $user = User::create($fields);


        if (!$user) {

            return redirect()->back()->with('error', 'مشکلی در ثبت نام شما پیش آمده است مجددا اقدام کنید!');
        }

        Auth::login($user);


        if ($request->subscribe) {

            event(new UserSubscribed($user));
        }

        event(new Registered($user, $request->password));

        //redirect
        return redirect()->route('index')->withErrors([
            'success' => auth()->user()->name . ' خوش امدید.',
        ]);
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate(
            [

                'email' => ['required', 'max:255', 'email'],
                'password' => ['required']

            ],
            [
                'email.required' => 'ایمیل معتبر خود را وارد نمایید!',
                'email.email' => 'ایمیل معتبر وارد نمایید!',
                'password.required' => 'کلمه عبور خود را وارد نمایید!',
            ]
        );

        if (Auth::attempt($credentials, $request->remember)) {

            $request->session()->regenerate();

            return redirect()->route('index')->withErrors([
                'success' => auth()->user()->name . ' خوش امدید.'
            ]);
        }

        Session::regenerate();
        return redirect()->back()->with('error', 'نام کاربری یا کلمه عبور شما اشتباه است!');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('index')->withErrors([
            'success' => 'به امید دیدار مجدد شما'
        ]);
    }

    public function forgotPassword(Request $request): RedirectResponse
    {
        $request->validate(
            [

                'email' => ['required', 'email'],
            ],
            [
                'email.required' => 'ایمیل خود را وارد نمایید!',
                'email.email' => 'ایمیل معتبر خود را وارد نمایید!'
            ]
        );

        $status = FecadesPassword::sendResetLink(
            $request->only('email')
        );

        return $status === FecadesPassword::ResetLinkSent
            ? back()->with(['success' => 'لینک بازیابی کلمه عبور به ایمیل شما ارسال شد.'])
            : back()->withErrors(['error' => __($status)]);
    }

    public function resetPassword(string $token): View
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    public function updatePassword(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'token' => ['required'],
                'email' => ['required', 'email'],
                'password' => ['required', 'confirmed', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()],
            ],

            [
                'token.required' => 'توکن معتبر نمی باشد!',
                'email.required' => 'ایمیل معتبر خود را وارد نمایید!',
                'email.email' => 'ایمیل معتبر وارد نمایید!',
                'password.required' => 'کلمه عبور خود را وارد نمایید!',
                'password.min' => 'کلمه عبور باید حداقل 8 کارکتر باشد!',
                'password.max' => 'کلمه عبور باید حداکثر 12 کارکتر باشد!',
                'password.confirmed' => 'کلمه عبور با تکرار آن برابر نیست!',
                'password.mixed' => 'کلمه عبور باید شامل اعداد کارکتر کوچک و بزرگ و کارکترهای ويژه (!@#$%^&*) باشد!',
            ]
        );


        $status = FecadesPassword::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) use ($request) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user, $request->password));
            }
        );

        return $status === FecadesPassword::PasswordReset
            ? redirect()->route('login')->with('success', 'رمز شما با موفقیت عوض شد و رمز فعلی ایمیل شد.')
            : back()->withErrors(['error' => [__($status)]]);
    }
}
