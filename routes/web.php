<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

//  Home page route gets the five latest articles
Route::get('/', function () {
    $articles = DB::table('articles')
        ->orderBy('date_published', 'desc')
        ->orderBy('category_id', 'ASC')
        ->limit(5)
        ->get();
    return view('home', ['articles' => $articles]);
});

// Article page route. Article id is taken and returns the article associated with the id and the other necessary data.
Route::get('/article/{id}', function ($id) {
    $articles = DB::table('articles')
        ->join(
            'categories',
            'articles.category_id',
            '=',
            'categories.category_id'
        )
        ->where('article_id', '=', $id)
        ->get();
    $tags = DB::table('articles_tags')
        ->join('tags', 'articles_tags.tag_id', '=', 'tags.tag_id')
        ->where('article_id', '=', $id)
        ->get();

    return view('article', ['id' => $id, 'articles' => $articles, 'tags' => $tags]);
})->name('article');

// Category page route. Slug category is passed and all articles associated with the category is returned.
Route::get('/category/{slug}', function ($slug) {

    $articles = DB::table('articles')
        ->join('categories', 'articles.category_id', '=', 'categories.category_id')
        ->where('name', '=', $slug)
        ->get();

    return view('category', ['slug' => $slug, 'articles' => $articles]);
});

// Tag page route. Slug tag is passed and all articles associated with the category is returned.
Route::get('/tag/{slug}', function ($slug) {
    $articles = DB::table('articles')
        ->join('articles_tags', 'articles.article_id', '=', 'articles_tags.article_id')
        ->join('tags', 'articles_tags.tag_id', '=', 'tags.tag_id')
        ->where('name', '=', $slug)
        ->get();

    return view('tag', ['slug' => $slug, 'articles' => $articles]);
});

// Legal page route. The variable "tos" or "privacy" is passed and the page displays data based on the input.
Route::get('/legal/{subsection}', function ($subsection) {
    return view('legal', ['subsection' => $subsection]);
})->where('subsection', '(tos|privacy)');


// Search page routes, one is the GET method to display the page and the other is the POST method
// to handle the form input

Route::get('/search', function () {
    return view('search');
});

Route::post('/search', function () {
    $articles = DB::table('articles')
        ->get();
    return view('search_result', ['articles' => $articles]);
})->name('search_result');
