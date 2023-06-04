<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Robby Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit et repellendus maiores a temporibus eaque, ipsum natus error beatae eligendi quaerat cumque vitae, delectus sequi dolor mollitia molestiae architecto fuga."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Robby Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit et repellendus maiores a temporibus eaque, ipsum natus error beatae eligendi quaerat cumque vitae, delectus sequi dolor mollitia molestiae architecto fuga."
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
