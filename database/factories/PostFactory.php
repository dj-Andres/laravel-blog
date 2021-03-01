<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        
        $nombre=$this->faker->unique()->sentence();

        return [
            'nombre'=>$nombre,
            'slug'=>Str::slug($nombre),
            'extract'=>$this->faker->text(120),
            'body'=>$this->faker->text(2000),
            'status'=>$this->faker->randomElement([1, 0]),
            'user_id'=> User::all()->random()->id,
            'category_id'=> Category::all()->random()->id
        ];
    }
}
