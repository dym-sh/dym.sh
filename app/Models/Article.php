<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = [ 'title', 'slug', 'body' ];

    use HasFactory;

    public static function find(string $slug): array
    {
        $article = Arr::first(Article::all(), fn($article) => $article['slug'] === $slug);

        if(! $article ) {
            abort(404);
        }

        return $article;
    }


    public static function findById(string $id): array
    {
        $article = Arr::first(Article::all(), fn($article) => $article['id'] === $id);

        if(! $article ) {
            abort(404);
        }

        return $article;
    }


    public function user_id()
    {
        return $this->belongsTo(User::class);
    }

}
