<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController;

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

Route::redirect('/','/en');

Route::group(['prefix' => '{language}'], function() {
    Route::get('/', function () {
        return view('aboutMe');
    });
    
    Route::get('/aboutMe', function () {
        return View::make('aboutMe');
    })->name('aboutMe');
    
    Route::get('/education', function () {
        return View::make('education');
    })->name('education');
    
    Route::get('/personalInformation', function () {
        return View::make('personalInformation');
    })->name('personalInformation');
    
    Route::get('/post/create', 'BlogController@create');
    
    Route::get('/post/{id}', [BlogController::class,'get_blog']);
    
    Route::get('blog/index', [BlogController::class,'index']);
    
    Route::get('blog/create', function() {
        return view('blog.create');
    });
    
    Route::post('blog/create', [BlogController::class,'store'])->name('add-blog');
    
    Route::get('/post', function () {
        $post = Post::find(1);
        return $post;
    });
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
