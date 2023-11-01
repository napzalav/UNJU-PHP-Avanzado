<?php

use App\Http\Controllers\autorController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\noticiaController;
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

Route::get('/', function () {
    return view('welcome');
    // echo "<h1>Pantalla principal del sitio web</h1>";
});

Route::get('/saludos', function () {
    return 'saludos';
});

// =============== NOTICIAS ==================
//si quiero mostrar la VISTA de noticias
Route::get('/noticias', function () {
    return view('noticias');
});
// Route::get('noticias', [noticiasController::class,'allNoticias'])->name('noticias');
Route::get('noticias/create', [noticiaController::class,'create'])->name('create');
Route::get('noticias/edit', [noticiaController::class,'edit'])->name('edit');
Route::get('noticias/detail', [noticiaController::class,'detail'])->name('detail');

// =============== AUTORES ==================
//si quiero mostrar la VISTA de autores
Route::get('/autores', function () {
    return view('autores');
});
Route::get('autores/create', [autorController::class,'create'])->name('create');
Route::get('autores/edit', [autorController::class,'edit'])->name('edit');
Route::get('autores/detail', [autorController::class,'detail'])->name('detail');


Route::get('blog', [BlogController::class,'index'])->name('blog');
Route::get('blog/create', [BlogController::class,'create'])->name('blog');














// Route::match(['get','post'],'acerca', function(){
//     return 'Match';
// });

// Route::get('/user/{name}', function (string $name) {
//     return $name;
// })->whereAlphaNumeric('');

// Route::prefix('admin')->group(function () {
//     Route::get('blog', 'index');
//     Route::get('blog/create', 'create');
// });

// Route::prefix('admin')->group(function () {
//     Route::get('/user', function(){
//         return 'Users';
//     });
// });