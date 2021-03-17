<?php

namespace Database\Seeders;

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
        /**
         * Utilizaremos los modelos de User y Post
         * para generar datos falsos de forma aleatoria.
         * En las 2 sentencias a continuacion se generan 10 Usuarios y 120 posts.
         */

        \App\Models\User::factory(10)->create();
        \App\Models\Post::factory(120)->create();
        
    }
}
