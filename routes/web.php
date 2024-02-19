<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\SellController;
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

// rotta per home
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');

// rotta per form
Route::get('/contattaci', [PublicController::class, 'contattaci'])->name('contattaci');

// rotta per invio form da parte dell'utente
Route::post('/contattaci/submit', [PublicController::class, 'contattaci_submit'])->name('contattaci_submit');

// Rotta per reindirizzamento su altra pagina dopo aver compilato form
Route::get('/contattaci/grazie/{name}', [PublicController::class, 'contattaci_grazie'])->name('contattaci_grazie');

Route::get('/sell', [SellController::class, 'sell'])->name('sell');

Route::post('/sell/store', [SellController::class, 'sell_store'])->name('sell_store');

Route::get('/sell/index', [SellController::class, 'sell_index'])->name('sell_index');

Route::get('/articles/show/{article}', [SellController::class, 'articles_show'])->name('articles_show');

Route::get('/articles/edit/{article}', [SellController::class, 'articles_edit'])->name('articles_edit');

Route::put('/articles/update{article}', [SellController::class, 'articles_update'])->name('articles_update');

Route::delete('/article/delete/{article}', [SellController::class, 'article_delete'])->name('article_delete');
