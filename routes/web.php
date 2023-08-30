<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);


// Route::get('/cursos', 'CourseController@index');
Route::controller(CourseController::class)->group(function(){
    Route::get('/cursos','index');
    Route::get('/cursos/create', 'create');
    Route::get('/cursos/{curso}', 'show');
});

// Route::get('/cursos', [CourseController::class, 'index']);
// Route::get('/cursos/create', [CourseController::class, 'create']);
// Route::get('/cursos/{curso}', [CourseController::class, 'show']);

// Route::get('/cursos/area/{curso?}', function($curso = null){
//     if(isset($curso)){
//         return "Este es el curso de {$curso}";
//     }else{
//         return "Bienvenido(a) a nuestra plataforma de cursos";
//     }
// });

Route::get('/user/{id}', function($id){
    return "Usuario con el ID {$id}";
});