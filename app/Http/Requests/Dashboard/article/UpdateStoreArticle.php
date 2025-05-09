<?php

namespace App\Http\Requests\Dashboard\article;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class UpdateStoreArticle extends FormRequest
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

            'author_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'type' => 'required|string|in:فوری,حوادث,خبری,متنی,چندرسانه ای,سایر',
            'body' => 'required|string',
            'slug' => 'required|string|unique:articles,slug',
            'short_body' => 'nullable|string',
            'thumbnail' => 'nullable|image|max:2048|mimes:jpeg,jpg,png,gif',
            'tags' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'status' => 'nullable'
        ];
    }


    public function messages(): array
    {
        return [

            'title.required' => 'برای این مقاله عنوان انتخاب نمایید.',
            'title.max' => 'مقاله تنها باید شامل 255 کارکتر باشد.',
            'type.required' => 'نوع خبر را انتخاب نمایید.',
            'type.in' => 'نوع خبر درست نیست.',
            'body.required' => 'متن مقاله را وارد کنید.',
            'slug.required' => 'نامک ( شناسه ) خبر را وارد نمایید.',
            'slug.unique' => 'این نامک قبلا ثبت شده است نامک دیگری انتخاب نمایید.',
            'thumbnail.image' => 'یک فایل تصویری انتخاب نمایید.',
            'thumbnail.max' => 'حجم تصویر نباید بیشتر از 2 مگابایت باشد.',
            'thumbnail.mime' => 'فایل مورد نظر باید شامل فرمت های ( jpeg,jpg,png,gif ) باشد',
            'category_id.exists' => 'دسته بندی مورد نظر پیدا نشد'
        ];
    }


    public function validated($key = null, $default = null)
    {
        $validatedData = parent::validated();
        unset($validatedData['thumbnail']);
        return $validatedData;
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'author_id' => auth()->id()
        ]);

        $this->status ? $this->merge(['status' => 'review']) : $this->merge(['status' => 'pending']);

        if (!empty($this->slug)) {
            $this->merge(['slug' => Str::slug($this->slug)]);
        }
    }
}
