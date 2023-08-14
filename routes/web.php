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
use App\Http\Controllers\TextsController;
use App\Http\Controllers\AudiosController;
use App\Http\Controllers\TouchesController;
use App\Http\Controllers\TextConfigController;

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
    Route::prefix('text')->group(function (){
        Route::get('/',[TextsController::class,'index'])->name('text.index');
        Route::get('/{id}',[TextsController::class,'show'])->name('text.show');
        Route::post('/',[TextsController::class,'create'])->name('text.create');
        Route::put('/{id}',[TextsController::class,'update'])->name('text.update');
        Route::delete('/{id}',[TextsController::class,'delete'])->name('text.delete');
    });
    Route::prefix('touch')->group(function (){
        Route::get('/',[TouchesController::class,'index'])->name('touch.index');
        Route::get('/{id}',[TouchesController::class,'show'])->name('touch.show');
        Route::post('/',[TouchesController::class,'create'])->name('touch.create');
        Route::put('/{id}',[TouchesController::class,'update'])->name('touch.update');
        Route::delete('/{id}',[TouchesController::class,'delete'])->name('touch.delete');
    });
    Route::prefix('audio')->group(function (){
        Route::get('/',[AudiosController::class,'index'])->name('audio.index');
        Route::get('/{id}',[AudiosController::class,'show'])->name('audio.show');
        Route::post('/',[AudiosController::class,'create'])->name('audio.create');
        Route::put('/{id}',[AudiosController::class,'update'])->name('audio.update');
        Route::delete('/{id}',[AudiosController::class,'delete'])->name('audio.delete');
    });
    Route::prefix('text-config')->group(function (){
        Route::get('/',[TextConfigController::class,'index'])->name('textConfig.index');
        Route::get('/{id}',[TextConfigController::class,'show'])->name('textConfig.show');
        Route::post('/',[TextConfigController::class,'create'])->name('textConfig.create');
        Route::put('/{id}',[TextConfigController::class,'update'])->name('textConfig.update');
        Route::delete('/{id}',[TextConfigController::class,'delete'])->name('textConfig.delete');
    });

});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
