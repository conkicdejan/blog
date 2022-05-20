<?php

use Illuminate\Support\Facades\Route;
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
    $name = 'Pera';
    $lastname = 'Conkic';
    return view('welcome', compact('name', 'lastname'));
});

Route::get('/about-us', function() {
    $name = 'Dejan';
    $lastname = 'Conkic';
    return view('about-us', compact('name', 'lastname'));
});

Route::get('/posts', function() {
    $posts = Post::all();
    return view('posts', compact('posts'));
});

Route::get('/posts/{id}', function($id) {
    $post = Post::find($id);
    return view('post', compact('post'));
});