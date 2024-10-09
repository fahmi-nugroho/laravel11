<?php
// NOTE harus menggunakan namspace agar bisa terbaca oleh Laravel
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    // NOTE Untuk melakukan eager loading secara default
    protected $with = ['author', 'category'];

    // NOTE Untuk menentukan filed apa saja yang tidak boleh diisi manual
    // protected $guarded = [];

    // NOTE user memiliki banyak post
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter(Builder $query, array $filters): void
    {
        // NOTE Filter by search
        $query->when(($filters['search'] ?? false),
            fn($query, $search) =>
            $query->where('title', 'like', '%' . $search . '%')
        );

        // NOTE Filter by category
        $query->when(($filters['category'] ?? false),
            fn($query, $category) =>
            $query->whereHas('category', fn($query) => $query->where('slug', $category))
        );

        // NOTE Filter by author
        $query->when(($filters['author'] ?? false),
            fn($query, $author) =>
            $query->whereHas('author', fn($query) => $query->where('username', $author))
        );
    }
}
