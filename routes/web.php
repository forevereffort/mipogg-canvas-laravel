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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::prefix('blog')->group(function () {
    Route::get('/', 'BlogController@getPosts')->name('blog.index');
    Route::get('/canvas', 'BlogController@getPostsCanvas')->name('blog.canvas');
    Route::middleware('Canvas\Http\Middleware\ViewThrottle')->get('{slug}', 'BlogController@findPostBySlug')->name('blog.post');
    Route::get('tag/{slug}', 'BlogController@getPostsByTag')->name('blog.tag');
    Route::get('topic/{slug}', 'BlogController@getPostsByTopic')->name('blog.topic');
});

Route::get('get/post/{id}', 'BlogController@getPostByID')->name('blog.getpostbyid');
Route::get('get/post-page', 'BlogController@getPostByPage')->name('blog.getpostbypage');

// override canvas create new post for friendly url
Route::get('posts/create', 'PostController@create')->name('canvas.post.create');
Route::post('posts', 'PostController@store')->name('canvas.post.store');
Route::put('posts/{id}', 'PostController@update')->name('canvas.post.update');

Route::post('canvas/media/uploads', 'MediaController@store')->name('canvas.media.store');


Route::prefix('fr')->group(function () {
    Route::get('/', 'HomeController@frenchIndex')->name('fr.home');
    Route::get('/blogue', 'BlogController@frenchGetPosts')->name('fr.blog.index');
    Route::middleware('Canvas\Http\Middleware\ViewThrottle')->get('blog/{slug}', 'BlogController@frenchFindPostBySlug')->name('fr.blog.post');
    Route::get('get/post-page', 'BlogController@frenchGetPostByPage')->name('blog.getpostbypage');
});