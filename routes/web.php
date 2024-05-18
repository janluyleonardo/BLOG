<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\cursoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);
//como se llamaba los controladores en version 7
//Route::get('/', HomeController::class);

Route::get('cursos', [cursoController::class, 'index']);
//como se llamaba los controladores en version 7
//Route::get('cursos', 'cursoController@index');

Route::get('cursos/create', [cursoController::class, 'create']);

Route::get('cursos/{curso?}', [cursoController::class, 'show']);



// Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria=null) {
//     if($categoria){
//         return "Bienvenido al curso: $curso, de la categoria $categoria";
//     } else{
//         return "Bienvenido al curso: $curso";
//     }
// });