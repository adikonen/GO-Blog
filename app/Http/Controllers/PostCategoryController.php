<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StorePostCategoryRequest;
use App\Http\Requests\UpdatePostCategoryRequest;

class PostCategoryController extends Controller
{
    #seluruh method hanya diakses oleh admin kecuali show
    public function __construct()
    {
        $this->authorizeResource(PostCategory::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //memperlihatkan seluruh data post kategori (hnya admin)
        $context = [
            'title' => "GO-Blog | Daftar Post Kategori",
            'postCategories' => PostCategory::all()
        ];
        return view("post-categories.index", $context);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan halaman pembuatan post kategori (hanya admn)
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePostCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostCategoryRequest $request)
    {
        //store (hanya admin)
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function show(PostCategory $postCategory)
    {
        //memperlihatkan sebuah postingan yang berdasarkan kategori (semua)
        $context = [
          'title' => "Postingan" . $postCategory->name,
          'posts' => $postCategory->posts
        ];

        return view("welcome", $context);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(PostCategory $postCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePostCategoryRequest  $request
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePostCategoryRequest $request, PostCategory $postCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostCategory  $postCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostCategory $postCategory)
    {
        //
    }
}
