<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\TestFormController;

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

//Route::get('/', function () {
//    return view('welcome');
//});

route::get('/',[MangaController::class,'index']);
route::get('/dashboard',[MangaController::class,'index']);

//Route::get('/dashboard', function () {
//   return view('dashboard');
//})->middleware(['auth'])->name('dashboard');

Route::resource('mangas',MangaController::class);

Route::get('testformulaire', [TestFormController::class, 'getInfos']);
Route::post('testformulaire', [TestFormController::class, 'postInfos']);

require __DIR__.'/auth.php';
