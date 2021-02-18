<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolSeeder::class);
         //\App\Models\User::factory(10)->create();
         $this->call(UserSeeder::class);
         Category::factory(4)->create();
         Tag::factory(8)->create();
         Post::factory(30)->create();
         $this->call(PostSeeder::class);
    }
}
