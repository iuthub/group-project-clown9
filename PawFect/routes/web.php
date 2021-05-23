<?php

use App\Http\Controllers\PetsController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminController;

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


//Route::get('/', [AdminController::class, 'addNewUser']);
Route::post('/admin/search', [AdminController::class, 'showSearch'])->name('searchForAdmin');
Route::get('/admin', [AdminController::class, 'showUsers'])->name('showUsersToAdmin');
Route::post('admin/delete', [AdminController::class, 'deleteItem']);
Route::get('/admin/not_found', [AdminController::class, 'firstOr']);

Route::get('/', [PetsController::class,'showAllPets'])->name("landing-pets");
Route::post('/products/search', [PetsController::class, 'searchForPet'])->name("searchForPet");
Route::get('/order{id}', [PetsController::class,'showPostDetail'])->name("post-detail-pets");
Route::get('admin/details/order{id}', [AdminController::class,'showDetailsToAdmin'])->name('admin-detail-pets');
Route::get('/catgories={categories}' , [PetsController::class,'sortByCategory'])->name("sort-post");
//Route::get('/Products.#categories')->name("categories-jump");

