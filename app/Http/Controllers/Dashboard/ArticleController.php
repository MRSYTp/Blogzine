<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\article\UpdateStoreArticle;
use App\Models\Dashboard\Article;
use App\Models\Dashboard\Category;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {

        $categories = Category::all();
        return view('dashboard.create-article', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UpdateStoreArticle $request): RedirectResponse
    {
        $article = $request->validated();

        $result = Article::create($article);

        return $result
            ? redirect()->route('article.index')->with('success', 'مقاله شما با موفقیت ثبت شد')
            : redirect()->back()->withErrors(['error' => 'خطایی در ثبت مقاله رخ داده است!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
