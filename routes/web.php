<?php

use App\Http\Controllers\NoticiaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/noticias', [NoticiaController::class,'index'])->name('noticias.index');
Route::get('noticias/create',  [NoticiaController::class,'create'])->name('noticias.create');
Route::post('noticias',  [NoticiaController::class,'store'])->name('noticias.store');
Route::get('noticias/{noticia}',  [NoticiaController::class,'show'])->name('noticias.show');
Route::get('noticias/{noticia}/edit',  [NoticiaController::class,'edit'])->name('noticias.edit');
Route::delete('noticias/{noticia}',  [NoticiaController::class,'destroy'])->name('noticias.destroy');



// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});
Route::view('/pages/slick', 'pages.slick');
Route::view('/pages/datatables', 'pages.datatables');
Route::view('/pages/blank', 'pages.blank');
