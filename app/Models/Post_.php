<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Posts Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yuliyanti",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe laborum eaque nulla nisi suscipit 
            soluta tempora? Id quas doloremque saepe dicta doloribus tenetur, laborum recusandae delectus labore 
            eum aliquid, maiores adipisci inventore ipsa omnis enim eveniet nemo est sapiente excepturi? Voluptates 
            quaerat numquam beatae eveniet reprehenderit ad dicta minus laborum ea quibusdam expedita itaque facilis, 
            officia quis quidem mollitia temporibus tenetur deserunt eaque natus! Facilis ab blanditiis eveniet atque 
            voluptates aspernatur nam voluptatem, porro officiis, itaque veniam qui, provident ad."
        ],
        [
            "title" => "Judul Posts Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Putri",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, animi. Fuga aperiam iure suscipit 
            quod adipisci fugit ipsa temporibus in eos doloremque dicta dignissimos cum sunt accusantium, obcaecati 
            ipsam? Molestiae incidunt, totam rerum quisquam cupiditate, consectetur doloribus ullam alias aut iste 
            possimus sapiente ad iure fuga facere quod. Ab eaque excepturi recusandae eos rem eum molestias sit sed 
            nisi? Tenetur quae modi distinctio illum, at quod ex reiciendis explicabo accusantium animi, asperiores 
            ipsum perferendis cumque ullam nam, mollitia magnam maiores sit? Qui commodi omnis eligendi a in, esse 
            quisquam non fugit perspiciatis aperiam, alias eius. Placeat eius modi vel incidunt."
        ]
    ];

    public static function all()
    {
        return collect(self ::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
        
}
