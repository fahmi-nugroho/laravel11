<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Fahmi Nugroho', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    // NOTE get untuk menambahkan beberapa query
    // NOTE with() untuk menggunakan eager loading
    // $posts = Post::with('author')->with('category')->latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => Post::with('author')->latest()->get()]);
});

// NOTE mengubah yang defaultnya id ke slug
Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/authors/{user:username}', function (User $user) {
    // NOTE load() untuk menggunakan lazy eager loading
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' Articles by ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function (Category $category) {
    // NOTE load() untuk menggunakan lazy eager loading
    // $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => count($category->posts) . ' Articles in: ' . $category->name, 'posts' => $category->posts]);
});
