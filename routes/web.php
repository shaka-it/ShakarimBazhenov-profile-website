<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

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

Route::get('/aboutMe', function () {
    return View::make('aboutMe');
});

Route::get('/education', function () {
    return View::make('education');
});

Route::get('/personalInformation', function () {
    return View::make('personalInformation');
});

Route::get('/​post/create​', function () {
    DB::table('posts')->insert([
        'title' => 'CV',
        'body' => 'CV body'
    ]);
});

Route::get('/post', function () {
    $post = Post::find(1);
    return $post;
});


