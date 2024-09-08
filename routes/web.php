<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Fahmi Nugroho', 'title' => 'Contact']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => '1',
            'title' => 'Judul Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'Fahmi Nugroho',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eum quasi dicta quod! Sed, cumque dicta sit neque laborum itaque alias voluptate. Excepturi dolore sunt enim quod fuga. Eaque, corrupti.'
        ],
        [
            'id' => '2',
            'title' => 'Judul Artikel 2',
            'slug' => 'judul-artikel-2',
            'author' => 'Fahmi Nugroho',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore quis ab tempore commodi ad provident assumenda soluta iure, eligendi, ratione fugiat veritatis blanditiis voluptatibus ipsa corporis perferendis asperiores nesciunt! Earum minima minus aperiam illo error fugit. Rem, doloremque itaque! Eum dolorem tempore dolores reprehenderit ipsum quasi, reiciendis error quam amet aperiam suscipit architecto, harum aliquid aspernatur, perspiciatis sapiente quis nam debitis adipisci asperiores. Rerum quidem facilis molestiae repellendus harum, obcaecati illo soluta, sit architecto iure tempore placeat eaque aperiam alias eos dolorum ipsum doloremque! Blanditiis asperiores eius reprehenderit similique modi corporis, distinctio a ab, explicabo omnis magnam dolores laborum odit minus. Molestias perspiciatis totam nihil libero molestiae ab optio quod ad, perferendis aut, id deserunt tempora corrupti! Molestias voluptate expedita eius a, officia in et, numquam, iste necessitatibus aliquid alias tempora fuga quaerat esse ex accusamus repellendus aut iure saepe suscipit vero aspernatur veniam? Tenetur placeat ipsum sunt? Esse, eaque!'
        ]
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'title' => 'Judul Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'Fahmi Nugroho',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit eum quasi dicta quod! Sed, cumque dicta sit neque laborum itaque alias voluptate. Excepturi dolore sunt enim quod fuga. Eaque, corrupti.'
        ],
        [
            'id' => '2',
            'title' => 'Judul Artikel 2',
            'slug' => 'judul-artikel-2',
            'author' => 'Fahmi Nugroho',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore quis ab tempore commodi ad provident assumenda soluta iure, eligendi, ratione fugiat veritatis blanditiis voluptatibus ipsa corporis perferendis asperiores nesciunt! Earum minima minus aperiam illo error fugit. Rem, doloremque itaque! Eum dolorem tempore dolores reprehenderit ipsum quasi, reiciendis error quam amet aperiam suscipit architecto, harum aliquid aspernatur, perspiciatis sapiente quis nam debitis adipisci asperiores. Rerum quidem facilis molestiae repellendus harum, obcaecati illo soluta, sit architecto iure tempore placeat eaque aperiam alias eos dolorum ipsum doloremque! Blanditiis asperiores eius reprehenderit similique modi corporis, distinctio a ab, explicabo omnis magnam dolores laborum odit minus. Molestias perspiciatis totam nihil libero molestiae ab optio quod ad, perferendis aut, id deserunt tempora corrupti! Molestias voluptate expedita eius a, officia in et, numquam, iste necessitatibus aliquid alias tempora fuga quaerat esse ex accusamus repellendus aut iure saepe suscipit vero aspernatur veniam? Tenetur placeat ipsum sunt? Esse, eaque!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
