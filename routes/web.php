<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|---------------- ----------------------------------------------------------
*/

/* ROUTE PAR DEFAUT  *////////////////////////////////////////////////////////
Route::get('/', [PostsController::class, 'index'])
     ->name('homepage');


/* ROUTE DES POSTS */////////////////////////////////////////////////////////
/* listes des posts */
Route::get('/posts', [PostsController::class, 'index'])
     ->name('posts.index');
     
/* Détail d'un posts */
Route::get('/posts/{post}', [PostsController::class, 'show'])
     ->name('posts.show');

/* route detail d'une categorie */
// Route::get('/categories/{category}', [\App\Http\Controllers\CategoriesController::class, 'show'])
// ->name('categories.show');







/* AJAX */////////////////////////////////////////////////////////
/* more ressources */
Route::get('/ajax/more', [\App\Http\Controllers\PostsController::class, 'more'])
->name('ajax.more');

/* ajout commentaire */
Route::get('/ajax/comments', [\App\Http\Controllers\CommentsController::class, 'addComment'])
->name('ajax.addComment');

/* categorie en dynamique */
Route::get('/ajax/categories/{category}', [\App\Http\Controllers\PostsController::class, 'ajaxCategory'])
->name('categories.index');










/*  */
//* VOYAGER */////////////////////////////////////////////////////////
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


 