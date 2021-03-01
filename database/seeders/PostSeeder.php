<?php

namespace Database\Seeders;

use App\Models\image;
use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts=Post::factory(200)->create();

        foreach ($posts as $post) {
            image::factory(1)->create([
                'imagiable_id'=>$post->id,
                'imagiable_type'=>Post::class
            ]);
        }
    }

    /*$posts->tags()->attach([
        rand(1,4),
        rand(5,8)
    ]);*/
}
