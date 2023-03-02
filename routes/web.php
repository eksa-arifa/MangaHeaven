<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Komik;
use App\Http\Controllers\PageKomik;
use App\Http\Controllers\ChapterKomik;

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

Route::get('/', [Komik::class, 'show']);

Route::get('/page/{type}/{url}', [PageKomik::class, 'show']);

Route::get('/page/chapter/{ch}/{url}', [ChapterKomik::class, 'show']);

Route::get('page-search', [Komik::class, 'search']);
