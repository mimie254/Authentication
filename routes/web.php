<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AdminController;
use App\Http\Controllers\Books\BooksController;
use App\Http\Controllers\Authors\AuthorsController;
use App\Http\Controllers\Users\UsersController;
use App\Http\Controllers\DashboardController;

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
})->middleware(['test']);

/*Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');*/

/*Route::get('/normaluserdashboard', function (){
    return view('dashboard2');
});*/
 
Route::get('dashboard',[DashboardController::class,'dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('dashboard2',[DashboardController::class,'dashboard2']);
Route::resource('books',BooksController::class);
Route::resource('authors',AuthorsController::class);
Route::resource('users',UsersController::class);

Route::get('/logout', function () {
    return view('logout');
})->middleware(['auth'])->name('logout');


require __DIR__.'/auth.php';

/*Route::get('/register', function () {
    return view('register');
    }); */
    //Route::get('create',[BooksController::class,'create'])->name('form.create');
    
