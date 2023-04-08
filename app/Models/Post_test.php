<?php

namespace App\Models;

class Post_test
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rico Frenaldi Tokanto",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque reiciendis quis saepe sed incidunt nostrum, veritatis eum, totam expedita similique quae? Error distinctio voluptatibus, ipsam corporis eaque, atque officiis ab doloremque accusantium reprehenderit consectetur reiciendis? Beatae corrupti aut incidunt quaerat sint. Tenetur sed labore, fuga temporibus quod veritatis blanditiis quidem?"
        ],
        [
            "title" => "Judul Post Kartel",
            "slug" => "judul-post-kedua",
            "author" => "Juju Kartel",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate eos distinctio ipsa quis dolor sed maiores asperiores consequatur, ab repellat! Odio doloribus mollitia cupiditate exercitationem similique id, consequuntur quos illo excepturi assumenda obcaecati architecto nam dicta. Incidunt reprehenderit corporis labore soluta eveniet vitae dignissimos eius porro culpa, officia sit quaerat assumenda aperiam qui obcaecati. Totam architecto neque, doloribus repellendus cupiditate accusamus molestiae sed pariatur. Mollitia eos doloribus officia fugit quod fuga delectus alias optio, sapiente provident minima voluptatibus officiis laboriosam?"
        ]
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
