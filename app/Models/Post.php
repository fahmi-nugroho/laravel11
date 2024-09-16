<?php
// NOTE harus menggunakan namspace agar bisa terbaca oleh Laravel
namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
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
  }

  public static function find($slug): array
  {
    // NOTE contoh arrow function di php
    $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

    if (!$post) {
      abort(404);
    }

    return $post;
  }
}
