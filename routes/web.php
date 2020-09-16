<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
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
    $name = request('name');

    return view('test',[
        'name' => $name
    ]);
});


Route::get('/posts/{post}', [PostsController::class, 'show']);
/*Route::get('/posts/{post}', function ($post) {
    $posts = [
        'my-first' => 'Hello, this is my first post',
        'my-second' => 'Now this is the last'
    ];

    if (! array_key_exists($post, $posts)) {
        abort(404, 'Sorry, we couldn\'t found this page.');
    }

    return view('post', [
        'post' => $posts[$post] ?? 'Nothing'
    ]);
});*/