<?php
use App\Http\Controllers\TestsController;
use App\Post;
use App\User;
use App\address4;
use App\assign_persons;


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

// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/', 'TodolistFormController@index');
Route::get('/create-page', 'TodolistFormController@createPage');
Route::post('/create', 'TodolistFormController@create');
Route::get('/edit-page/{id}', 'TodolistFormController@editPage');
Route::post('/edit', 'TodolistFormController@edit');
Route::get('/delete-page/{id}', 'TodolistFormController@deletePage');
Route::post('/delete/{id}', 'TodolistFormController@delete');
Route::get('/assign', 'AssignpersonFormController@index');
Route::get('/add-page', 'AssignpersonFormController@addMemberPage');
Route::post('/add', 'AssignpersonFormController@add');
Route::get('/edit-member/{id}', 'AssignpersonFormController@editPage');
Route::get('/member-list', 'AssignpersonFormController@index');
Route::get('/remove-member/{id}', 'AssignpersonFormController@removeMember');
Route::post('/remove/{id}', 'AssignpersonFormController@remove');

Route::post('/edit-m', 'AssignpersonFormController@edit');
Route::get('/hello', function() {
    return 'hi';
});

Route::get('/test', function() {
    $posts = Post::all();
    foreach($posts as $post) {
        return $post->title;
    }
});

Route::get('/{id}/address', function($id) {
    $user=User::find($id);
    return "ユーザー番号".$id."番の住所:".$user->address->address;
});

Route::get('/{id}/addressr', function($id) {
    $address=address4::find($id);
    return "アドレス番号".$id."のユーザーの名前は".$address->user->name."さんです。";
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
