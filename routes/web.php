<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/posts', 'PostController@index');

Route::get('/posts/create', 'PostController@create');

Route::get('/', function(){
    return view('welcome');
});



Route::group(['namespace' => 'Post'], function (){
    Route::get('/posts', 'IndexController')->name('post.index'); // Страница список постов
    Route::get('/posts/create', 'CreateController')->name('post.create'); // Страница создание поста

    Route::post('/posts', 'StoreController')->name('post.store'); // Запрос создание поста
    Route::get('/posts/{post}', 'ShowController')->name('post.show'); // Страница просмотр поста
    Route::get('/posts/{post}/edit', 'EditController')->name('post.edit'); // Страница изменение поста
    Route::patch('/posts/{post}', 'UpdateController')->name('post.update'); // Запрос изменение поста
    Route::delete('/posts/{post}', 'DestroyController')->name('post.delete'); // Запрос удаление поста
});

Route::group(['namespace' => 'Category'], function (){
    Route::get('/categories', 'IndexController')->name('category.index'); // Страница список постов
//    Route::get('/categories/create', 'CreateController')->name('category.create'); // Страница создание поста

//    Route::post('/categories', 'StoreController')->name('category.store'); // Запрос создание поста
    Route::get('/categories/{category}', 'ShowController')->name('category.show'); // Страница просмотр поста
//    Route::get('/categories/{category}/edit', 'EditController')->name('category.edit'); // Страница изменение поста
//    Route::patch('/categories/{category}', 'UpdateController')->name('category.update'); // Запрос изменение поста
//    Route::delete('/categories/{category}', 'DestroyController')->name('category.delete'); // Запрос удаление поста
});




Route::get('/main', 'MainController@index')->name('main.index');
Route::get('/contacts', 'ContactController@index')->name('contact.index');
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/posts/update', 'PostController@update');
Route::get('/posts/delete', 'PostController@delete');
Route::get('/posts/first_or_create', 'PostController@firstOrCreate');
Route::get('/posts/update_or_create', 'PostController@updateOrCreate');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
