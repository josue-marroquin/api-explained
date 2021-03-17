<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        /**
         * Requeriremos varios datos 'falsos' para trabajar ejemplares.
         * De esta manera podremos hacer pruebas desde cualquier sistema
         * con los metodos GET, PUT y DELETE.
         * 
         * Tambien utilizamos Slug que es un metodo perteneciente a Factory para
         * la generacion automatica de datos falsos.
         */
        return [
            'user_id'   => rand(1,10),
            'title'     => $this->faker->sentence,
            'slug'      => $this->faker->slug,
            'content'   => $this->faker->text(1600)
        ];
    }
}
