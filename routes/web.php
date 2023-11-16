<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrawlDataController;
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

Route::get('/crawlBurger',[CrawlDataController::class, 'crawlBurger']);
Route::get('/crawlCombo',[CrawlDataController::class, 'crawlCombo']);
Route::get('/crawlChicken',[CrawlDataController::class, 'crawlChicken']);
Route::get('/crawlRice',[CrawlDataController::class, 'crawlRice']);
Route::get('/crawlExtra',[CrawlDataController::class, 'crawlExtra']);
Route::get('/crawlDrink',[CrawlDataController::class, 'crawlDrink']);
Route::get('/crawlTexasExtra',[CrawlDataController::class, 'crawlTexasExtra']);

Route::get('/', function () {
    return view('welcome');
});
