<?php

namespace App\Http\Requests\fileManager;

use Illuminate\Foundation\Http\FormRequest;

class FileManagerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'files' => 'required|array',
            'files.*' => 'file|max:20048|mimes:jpeg,jpg,png,gif,pdf,zip,rar,mp4,webm,avi,mov,txt',
        ];
    }


    public function messages(): array
    {
        return [

            'files.required' => 'فایل مورد نظر خود را انتخاب نمایید',
            'files.array' => 'فایل معتبر نیست!',
            'files.*.max' => 'حجم تصویر نباید بیشتر از 2 مگابایت باشد.',
            'files.*.mimes' => 'فایل مورد نظر باید شامل فرمت های ( jpeg,jpg,png,gif,zip,rar,pdf,txt,mp4,webm,avi,mov ) باشد',

        ];
    }


    // public function validated($key = null, $default = null)
    // {
    //     $validatedData = parent::validated();
    //     unset($validatedData['thumbnail']);
    //     return $validatedData;
    // }

    // public function prepareForValidation(): void
    // {
    //     $this->merge([
    //         'author_id' => auth()->id()
    //     ]);

    //     $this->status ? $this->merge(['status' => 'review']) : $this->merge(['status' => 'pending']);

    //     if (!empty($this->slug)) {
    //         $this->merge(['slug' => Str::slug($this->slug)]);
    //     }
    // }
}
