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

use App\Post;

Auth::routes();
Route::get('/', function () {

//    $title = "Essais 4";
//    $body = "Body d'essais 4";
//    DB::insert('INSERT INTO posts(title, body) VALUES(?, ?)', [$title, $body]);
//
//    $posts = DB::table('posts')->where('id', '>', 2)->get()
//    $post = new Post(['title' => 'Moms', 'body' => 'Welcome']);
//    $post->title = "Test";
//    $post->body = "Ca marche ?";*/
//    $post->save();
//    Post::create(['title' => 'TEST', 'body' => 'Welcome', 'slug' => 'Deuxième']);
//    $posts = Post::all()->filter(function ($post, $key) {
//        return $post->title == "Moms";
//    });
    $posts = Post::all();
    return view('welcome', compact('posts'));
});

Route::post('/', 'WelcomeController@create');

Route::delete('/delete/{id}', 'WelcomeController@destroy')->name('delete');

Route::get('/edit/{id}', 'WelcomeController@editPage')->name('editPage');

Route::patch('/{id}', 'WelcomeController@update')->name('edit');

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/help', function () {

    return view('pages/help');
});

Route::get('/event', function () {
    $events = [
        'Ici',
        'C\'est',
        'un',
        'test'
    ];
    return view('events/index', compact('events'));
});
