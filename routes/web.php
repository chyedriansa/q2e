<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

// Route::get('/todos', function () {
//     return 'TODOs';
// });
// Route::post('/todos', function(){

// });
// Route::get('todos/{todo}' , function(){

// });
// Route::put('todos/{todo}', function(){

// });
// ROute::delete('/todos/{todo}', function(){

// });
Route::get('/', [TodoController::class ,'index']);


//  Show create todo form

Route::get('/todos/create', [TodoController::class, 'create']);


// Add Todo

Route::post('/todos',[TodoController::class, 'store']);


// Show edit todo
Route::get('todos/{todo}/edit', [TodoController::class,'edit']);


// update todo

Route::put('todos/{todo}', [TodoController::class,'update']);


// Delete Todo

Route::get('/todos/{todo}/delete', [TodoController::class,'delete']);