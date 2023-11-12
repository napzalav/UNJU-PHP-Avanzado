<?php

use App\Http\Controllers\AutoresController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiasController;
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

Route::get("/", [HomeController::class,"index"])->name("inicio");
// Route::get('/', function () {
//     return view('index');
// });

Route::get('/saludos', function () {
    return 'saluditos desde PHP';
});

// =============== NOTICIAS ==================
Route::controller(NoticiasController::class)->group(function(){
    Route::get('noticias', 'index')->name('index');
    Route::get('noticias/create', 'create')->name('create');
    Route::get('noticias/{slug}','noticia')->name('noticia');
});
//si quiero mostrar la VISTA de noticias
// Route::get('/noticias', function () {
//     return view('noticias.index');
// });

// Route::get('noticias/create', [NoticiasController::class,'create'])->name('create');
// Route::get('noticias/edit', [NoticiasController::class,'edit'])->name('edit');
// Route::get('noticias/detail', [NoticiasController::class,'detail'])->name('detail');

// =============== AUTORES ==================
Route::controller(AutoresController::class)->group(function(){
    Route::get('autores','index')->name('index');
    Route::get('autores/create','create')->name('create');
    Route::get('autores/edit/{id}','edit')->name('edit');
});
//si quiero mostrar la VISTA de autores
// Route::get('/autores', function () {
//     return view('autores.index');
// });

// Route::get('autores/create', [autorController::class,'create'])->name('create');
// Route::get('autores/edit', [autorController::class,'edit'])->name('edit');
// Route::get('autores/detail', [autorController::class,'detail'])->name('detail');


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