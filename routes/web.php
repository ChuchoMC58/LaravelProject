<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController; 
use App\Models\Post;

use function Laravel\Prompts\select;

Route::get('/', HomeController::class);

Route::resource('posts', PostController::class);
 
// Route::get('/posts', [PostController::class, 'index'])
//       ->name('posts.index');

// Route::get('/posts/create', [PostController::class, 'Create'])
//      ->name('posts.create');
// Route::post('/posts', [PostController::class, 'Store'])
//          ->name('posts.store');

// Route::get('/posts/{id}', [PostController::class, 'show'])
//         ->name('posts.show');

// Route::get('/posts/{id}/edit', [PostController::class, 'edit'])
//          ->name('posts.edit');
        
// Route::put('/posts/{id}', [PostController::class, 'update'])
//         ->name('posts.update');
        
// Route::delete('/posts/{id}', [PostController::class, 'destroy'])
//          ->name('posts.destroy');

// Route::get('/posts/{post}/{category?}', [PostController::class, 'Post']);

// Route::get('/prueba', function () {
//     /* Guadar un nuevo Registro
//         $post = new Post;

//         $post->title = 'Post de prueba3';
//         $post->contenido = 'Contenido de prueba3';

//         $post->save();
//     */
    
//     /* Editar un Registro
//         $post = Post::where('title', 'Post de prueba2')
//                     ->first();
//         $post->title = 'Post de prueba3';
//         $post->save();
//         return $post;
//     */

//     /* Eliminar un Registro
//         $post = Post::where('title', 'Post de prueba3')
//                             ->delete();
//     */

//     //Encontrar por ID
//     //$post = Post::find(1);

//     /* Ordenar seleccionar y limitar registros
//         $posts = Post::where('id', '>', '1')   
//                     ->select('id', 'title', 'contenido')
//                     ->take(2) //cantidad de registros que se quieren obtener
//                     ->get(); //First() para obtener solo un registro
//     */    

//     $post = Post::find(1);
//     return $post->published_at->diffForHumans();
    
// });