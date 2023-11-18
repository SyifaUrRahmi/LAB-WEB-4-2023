<?php

namespace App\Models;

class Post
{
    private static $blog_posts =[
        [
            "title" => "Perahu Kertas",
            "slug" => "perahu-kertas",
            "author" => "Kucing Biru",
            "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, quisquam? Aperiam autem ut vero 
            laborum, quod quasi maxime aspernatur veritatis rerum quia eum voluptatem ea asperiores magnam necessitatibus illum nihil."
        ],
        [
            "title" => "100 Menara",
            "slug" => "100-menara",
            "author" => "Miko",
            "text" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, quisquam? Aperiam autem ut vero 
            laborum, quod quasi maxime aspernatur veritatis rerum quia eum voluptatem ea asperiores magnam necessitatibus illum nihil."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstwhere('slug', $slug);
    }
}
