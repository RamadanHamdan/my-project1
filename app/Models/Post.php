<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post

{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Ramadhan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi maiores commodi praesentium laudantium dicta harum dolorum aperiam quidem enim iste nihil recusandae, temporibus possimus cum, ipsam quae, necessitatibus assumenda iusto?'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Ramadhan',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quos.'
            ]
        ];
    }

    public static function find($slug): array
    {
       $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

       if (!$post) {
           abort(404);
       }

       return $post;
    }
}