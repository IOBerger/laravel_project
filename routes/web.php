<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\News;
use App\Http\Controllers\Categories;
use App\Http\Controllers\Contact;
use Illuminate\Http\Request;

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
    return view('pages.welcome');
});

Route::get('/info', function () {
    return view('pages.info');
});

Route::get('/hello', function () {
    return view('pages.hello');
});


Route::match(['post','get'], '/contact', [Contact::class,'add']);

Route::get('/news_categories', [Categories::class,'list']);
Route::get('/news/{category}', [News::class,'list'])->name('news');
Route::get('/news/', [News::class,'list'])->name('news_all');
Route::get('/newsItem/{item}', [News::class,'newsShowItem'])->name('newsItem');

Route::match(['post','get'], '/add_news',[News::class,'store']);
