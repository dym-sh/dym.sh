<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Article //extends Model
{
    use HasFactory;

    public static function all(): array {
        return [
            [   'id' => 1,
                'title' => 'First One',
                'slug' => '1st',
                'body' => 'First!!1<br>
                            lol',
            ],
            [   'id' => 2,
                'title' => 'Second One',
                'slug' => '2nd',
                'body' => 'Second i do concour<br>
                            lmfao',
            ],
            [   'id' => 3,
                'title' => 'Third One',
                'slug' => '3rd',
                'body' => 'Third indeed<br>
                            xD',
            ],
        ];
    }

    public static function find(string $slug): array
    {
        $article = Arr::first(Article::all(), fn($article) => $article['slug'] === $slug);

        if(! $article ) {
            abort(404);
        }

        return $article;
    }

}
