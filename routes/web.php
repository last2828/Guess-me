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
//    return view('dashboard');
//})->name('dashboard');

Route::group(['prefix' => 'author', 'middleware' => 'auth'], function(){

  Route::get('/dashboard', [MainController::class, 'index'])->name('dashboard');

  // Routes for quests
  Route::resource('quests', QuestController::class)->except(['show', 'edit']);
  Route::get('/quests/{quest}', [QuestController::class, 'show'])->name('quests.show');
  Route::get('/quests/{quest}/edit', [QuestController::class, 'edit'])->name('quests.edit');


  // Routes for quest tasks


  Route::group(['prefix' => 'quests/{quest}', 'middleware' => 'auth'], function(){
    Route::resource('tasks', TaskController::class);

//    Route::get('tasks', [TaskController::class, 'index'])->name('tasks.index');
//    Route::get('tasks/create', [TaskController::class, 'create'])->name('tasks.create');
//    Route::get('{task}', [TaskController::class, 'show'])->name('tasks.show');
//    Route::get('{task}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
  });



});

Route::get('/test', function(){
  return view('author.tasks.test');
});

