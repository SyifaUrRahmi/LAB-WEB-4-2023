<?php

namespace App\Models;



class Post 
{
   private static $blog_posts =[
        [
        "title" => "Judul Posts Pertama",
        "slug" => "judul-posts-pertama",
        "author" => "KHAERURROZIKIN",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam voluptatem quasi dolor reiciendis nesciunt quas quos modi, repudiandae iusto earum, esse omnis architecto velit quidem temporibus voluptates! Error corrupti atque expedita recusandae illum, est corporis minima cumque reiciendis, neque ratione possimus dolores blanditiis iure non, nemo minus illo unde maiores dignissimos. Sunt id, dolorum blanditiis odio dolores ut aliquid accusantium, similique a doloremque quaerat distinctio aspernatur velit corporis iste consequuntur cumque? Perferendis vel ut magni modi commodi! Eum, quaerat reprehenderit."
    ],
    [
        "title" => "Judul Posts Kedua",
        "slug" => "judul-posts-kedua",
        "author" => "JEGELKUN",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea et id, perspiciatis nihil sapiente officia aut cum veniam ducimus corporis tempore cumque, odio exercitationem vero saepe unde libero, inventore vel voluptate corrupti aperiam eligendi numquam rem. Exercitationem aspernatur odio doloremque illum cumque labore illo saepe commodi. Ad voluptate optio corporis neque nobis, quisquam similique dolores aliquid saepe deleniti, ut quam facilis adipisci repellat est cumque et possimus soluta. Quis labore natus, quidem accusamus accusantium officia voluptatibus aspernatur eveniet architecto sed, repudiandae, repellat temporibus eligendi fugit in blanditiis voluptates neque obcaecati libero veritatis totam. In laborum veniam molestias impedit quia! Deserunt."
    ],
  ];

  public static function all()
  {
    return collect(self::$blog_posts);
  }

  public static function find ($slug)
  {
    $posts = static::all();
    $post = [];
    foreach($posts as $p) {
        if($p["slug"] === $slug) {
            $post = $p;
        }
    }

    return $posts -> firstWhere('slug', $slug);
    // return $post;
  }
    
}
