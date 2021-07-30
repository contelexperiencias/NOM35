<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['prefix'=>'admin','middleware' => 'auth'], function(){
    // ruta de administracion
    
    Route::resource('/cuestionario', App\Http\Controllers\Admin\CuestionarioController::class);  
    Route::resource('/categorie', App\Http\Controllers\Admin\CategorieController::class); 
    Route::resource('/usuario', App\Http\Controllers\Admin\UsuarioController::class);     
    Route::resource('/dashboard', App\Http\Controllers\Admin\DashboardController::class);     
    Route::resource('/post', App\Http\Controllers\Admin\PostController::class);  
    Route::resource('/carrusel', App\Http\Controllers\Admin\CarruselController::class);
    Route::resource('/empresa', App\Http\Controllers\Admin\EmpresaController::class);    

});


// rutas publicas

Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);
Route::get('/empresa', [App\Http\Controllers\FrontController::class, 'empresa']);
Route::get('/artesanias', [App\Http\Controllers\FrontController::class, 'artesanias']);
Route::get('/artesanias/{categoria}', [App\Http\Controllers\FrontController::class, 'categoria']);
Route::get('/artesanias/{categoria}/{producto}', [App\Http\Controllers\FrontController::class, 'producto']);
Route::get('/blog', [App\Http\Controllers\FrontController::class, 'blog']);
Route::get('/blog/{post}', [App\Http\Controllers\FrontController::class, 'post']);

Route::get('/contacto', [App\Http\Controllers\FrontController::class, 'contacto']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
