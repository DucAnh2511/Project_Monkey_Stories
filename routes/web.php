<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
Route::prefix('api')->group(function (){
    Route::prefix('product')->group(function () {
        Route::get('/create', [ProductController::class, 'viewCreate'])->name('product.create');
        //READ
        Route::get('/', [ProductController::class, 'viewProduct'])->name('product.index');
        //CREATE
        Route::post('/', [ProductController::class, 'create'])->name('product.add');

        Route::view('/index', 'index');

        Route::get('/edit', [ProductController::class, 'viewEdit'])->name('product.viewEdit');
        //UPDATE
        Route::put('/{id}', [ProductController::class, 'edit'])->name('product.edit');
        //DELETE
        Route::delete('/{id}', [ProductController::class, 'delete'])->name('product.delete');
    });

});

