<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class TagFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tag::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $nombre=$this->faker->unique()->word(20);

        return [
            'nombre'=> $nombre,
            'slug'=> Str::slug($nombre),
            'color'=>$this->faker->randomElements(['red','yellow','green','blue','indigo','purple','pink'])
        ];
    }
}
