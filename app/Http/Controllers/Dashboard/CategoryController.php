<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Dashboard\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categoryCount = Category::count();
        $categories = Category::withCount('articles')->orderBy('id', 'desc')->paginate(6);
        return view('dashboard.category', compact('categories', 'categoryCount'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:50'],
                'slug' => ['required', 'string', 'max:50', 'unique:categories,slug'],
                'description' => ['nullable', 'string'],
                'icon' => ['required'],
            ],
            [
                'name.required' => 'برای دسته بندی نام انتخاب نمایید.',
                'name.max' => 'نام حداکثر می تواند شامل ۵۰ حرف باشد.',
                'slug.required' => 'برای دسته بندی شناسه لاتین انتخاب نمایید.',
                'slug.max' => 'نام حداکثر می تواند شامل ۵۰ حرف باشد.',
                'slug.unique' => 'شناسه ای با این نام قبلا ثبت شده است نام دیگری انتخاب نمایید.',
                'slug.slug' => 'فرمت شناسه صحیح نمی باشد اگر شناسه بیش از یک بخش دارد هر بخش را با ( - ) از هم جدا نمایید.',
                'icon.required' => 'برای دسته بندی آیکون انتخاب نمایید.'
            ]
        );

        return Category::create($request->all()) ? redirect()->back()->with('success', ' با موفقیت ایجاد گردید') : redirect()->back()->withErrors(['error' =>  'خطایی در ثبت دسته بندی رخ داده است!']);
    }

    public function edit(Category $category): View
    {
        return view('dashboard.editCategory', compact('category'));
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:50'],
                'slug' => ['required', 'string', 'max:50'],
                'description' => ['nullable', 'string'],
                'icon' => ['required'],
            ],
            [
                'name.required' => 'برای دسته بندی نام انتخاب نمایید.',
                'name.max' => 'نام حداکثر می تواند شامل ۵۰ حرف باشد.',
                'slug.required' => 'برای دسته بندی شناسه لاتین انتخاب نمایید.',
                'slug.max' => 'نام حداکثر می تواند شامل ۵۰ حرف باشد.',
                'slug.unique' => 'شناسه ای با این نام قبلا ثبت شده است نام دیگری انتخاب نمایید.',
                'slug.slug' => 'فرمت شناسه صحیح نمی باشد اگر شناسه بیش از یک بخش دارد هر بخش را با ( - ) از هم جدا نمایید.',
                'icon.required' => 'برای دسته بندی آیکون انتخاب نمایید.'
            ]
        );

        $result = $category->update($request->all());

        return $result ? redirect()->back()->with('success', 'بروزرسانی شد') : redirect()->back()->withErrors(['error' => 'مشکل در بروزرسانی']);
    }

    public function destroy(Category $category): RedirectResponse
    {
        $result = $category->delete();

        return $result ? redirect()->back()->with('success', 'دسته بندی حذف شد') : redirect()->back()->withErrors(['error' => 'حذف دسته بندی با مشکل مواجه شد']);
    }
}
