<?php


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
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\PagesController;
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('api')->group(function (){
    Route::prefix('story')->group(function (){
        Route::get('/',[StoriesController::class,'index'])->name('story.index');
        Route::get('/{id}',[StoriesController::class,'show'])->name('story.show');
        Route::post('/',[StoriesController::class,'create'])->name('story.create');
        Route::put('/{id}',[StoriesController::class,'update'])->name('story.update');
        Route::delete('/{id}',[StoriesController::class,'delete'])->name('story.delete');
    });
    Route::prefix('page')->group(function (){
        Route::get('/',[PagesController::class,'index'])->name('page.index');
        Route::get('/{id}',[PagesController::class,'show'])->name('page.show');
        Route::post('/',[PagesController::class,'create'])->name('page.create');
        Route::put('/{id}',[PagesController::class,'update'])->name('page.update');
        Route::delete('/{id}',[PagesController::class,'delete'])->name('page.delete');
    });

});

