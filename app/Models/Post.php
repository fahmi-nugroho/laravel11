<?php
// NOTE harus menggunakan namspace agar bisa terbaca oleh Laravel
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

// NOTE Secara default model Post akan berpasangan dengan tabel posts
class Post extends Model
{
    use HasFactory;
    // NOTE Ini dibutuhkan jika nama tabel tidak sesuai penamaan default laravel
    // protected $table = 'blog_post';

    // NOTE Ini dibutuhkan jika primary key tidak seesuai dengan default laravel (id)
    // protected $primaryKey = 'post_id';

    // NOTE Method all sudah ada secara default pada Model

    // NOTE Untuk menentukan field apa saja yang boleh diisi manual
    protected $fillable = ['title', 'author', 'slug', 'body'];

    // NOTE Untuk menentukan filed apa saja yang tidak boleh diisi manual
    // protected $guarded = [];

    // NOTE user memiliki banyak post
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
