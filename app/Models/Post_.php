<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rafi",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis ipsam placeat saepe veritatis in pariatur delectus eligendi molestias officia at laborum, aperiam quasi atque neque cum est, nulla maxime minus eius quo, repellendus a! Distinctio aliquam nisi labore, fugiat eos autem excepturi ipsa veniam quia animi. Sint consequuntur ullam vero aut, hic autem enim nam fuga facere, tenetur laboriosam? Impedit maiores recusandae quod vel aut vero laboriosam iure pariatur esse! Optio, officia veniam eaque cupiditate dolorem pariatur adipisci tempore non."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Doddy",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nobis ipsam placeat saepe veritatis in pariatur delectus eligendi molestias officia at laborum, aperiam quasi atque neque cum est, nulla maxime minus eius quo, repellendus a! Distinctio aliquam nisi labore, fugiat eos autem excepturi ipsa veniam quia animi. Sint consequuntur ullam vero aut, hic autem enim nam fuga facere, tenetur laboriosam? Impedit maiores recusandae quod vel aut vero laboriosam iure pariatur esse! Optio, officia veniam eaque cupiditate dolorem pariatur adipisci tempore non."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
