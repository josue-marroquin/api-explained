<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Este metodo nos dara la visualizacion web
     * a diferencia del manejo de datos por medio de api, esto
     * nos permitira trabjar con los datos de manera visual.
     * 
     * En cuanto lleguemos a este punto por medio de la ruta en web.php
     * vamos a devolver una vista llamada index con la informacion obtenida
     * desde el modelo Post.
     */
    public function index()
    {
        return view('index', [
            'posts' => Post::latest()->paginate()
        ]);
    }
}
