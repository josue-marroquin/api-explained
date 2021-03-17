<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Esta API gestiona un sistema de usuarios y posts.
         * Creamos la migracion con los siguientes campos:
         */

        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');  // Id de usuarios
            $table->string('title');                // Titulo
            $table->string('slug')->unique();       // Para presentar los titulos con mejor orientacion a SEO
            $table->text('content');                // Contenido de los posts

            $table->timestamps();                   // Created at y Updated at

            $table->foreign('user_id')->references('id')->on('users');  // Creacion de llave foranea para relaciones entre tablas
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
