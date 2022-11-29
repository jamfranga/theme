<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\NoticiaCategoriaController;


use App\Http\Controllers\Admin\HomeController;
use App\Models\NoticiaCategoria;
use App\Models\Noticia;

//tiene el prefijo /admin establcideo el ServicesProvider

Route::get('', [HomeController::class,'index'])->name('admin.home');
/*
Route::get('noticias', [NoticiaController::class,'index'])->name('noticias.index');
Route::get('noticias/create',  [NoticiaController::class,'create'])->name('noticias.create');
Route::post('noticias',  [NoticiaController::class,'store'])->name('noticias.store');
Route::get('noticias/{noticia}',  [NoticiaController::class,'show'])->name('noticias.show');
Route::get('noticias/{noticia}/edit',  [NoticiaController::class,'edit'])->name('noticias.edit');
Route::put('noticias/{noticia}/actualizar',  [NoticiaController::class,'update'])->name('noticias.update');
Route::delete('noticias/{noticia}',  [NoticiaController::class,'destroy'])->name('noticias.destroy');
*/
Route::resource('noticias', NoticiaController::class)->names('admin.noticias');


Route::resource('noticia_categorias', NoticiaCategoriaController::class)->names('admin.noticia_categorias');


Route::view('pages/slick', 'admin.slick');
Route::view('pages/datatables', 'admin.datatables');
Route::view('pages/blank', 'admin.blank');
