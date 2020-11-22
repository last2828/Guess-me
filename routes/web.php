<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\QuestController;
use App\Http\Controllers\TaskController;
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

Route::get('/', function () {
    return view('welcome');
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('author.index');
//})->name('dashboard');

Route::group(['prefix' => 'author', 'middleware' => 'auth'], function(){

  Route::get('/dashboard', [MainController::class, 'index'])->name('dashboard');


  Route::resources([
    'quests' => QuestController::class,
    'tasks' => TaskController::class,
  ]);
});


