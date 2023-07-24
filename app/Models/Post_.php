<?php

namespace App\Models;



class Post 
{
    private static $blog_posts =[
        [
            "title" => "judul Post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ahmad Risyfa",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab recusandae harum aliquam doloremque non corrupti perferendis sed rem quis, tenetur iure velit ducimus veritatis excepturi ad nobis consequatur debitis quo molestiae est nam optio? Ratione rem maxime laborum natus. Praesentium recusandae unde dolorum quisquam similique accusamus laudantium voluptatum ipsa minima doloribus maxime, quam maiores nobis facere error eveniet officiis numquam libero? Adipisci, natus. Suscipit porro magni dignissimos ut delectus officiis, tempora odit, ipsam veniam sed asperiores itaque assumenda! Delectus, doloribus!"
        ],
        [
            "title" => "judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Kak Kirun",
            "body" => "Praesentium recusandae unde dolorum quisquam similique accusamus laudantium voluptatum ipsa minima doloribus maxime, quam maiores nobis facere error eveniet officiis numquam libero? Adipisci, natus. Suscipit porro magni dignissimos ut delectus officiis, tempora odit, ipsam veniam sed asperiores itaque assumenda! Delectus, doloribusLorem ipsum dolor sit amet consectetur adipisicing elit. Ab recusandae harum aliquam doloremque non corrupti perferendis sed rem quis, tenetur iure velit ducimus veritatis excepturi ad nobis consequatur debitis quo molestiae est nam optio? Ratione rem maxime laborum natus.  !"
        ],
    ]; 
  
    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
