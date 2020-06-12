<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// })->middleware('check_token');

// Route::get('/hello', 'PostController@hello');

// Route::get('index', 'HomeController@index');

// Route::get('post/{category}/{post_id}', 'PostController@index')
//     ->where(['category' => '[a-zA-Z]+', 'post_id' => '[0-9]+']);

// Route::get('profile/{id}', 'InvokeController');

// /*Middleware*/
// Route::get('login', function () {
//     return view('login');
// });

// Route::get('middle', function () {
//     echo "Middleware test";
// })->middleware('check_token');

// //Middleware Group
// Route::group(['middleware' => ['web']], function () {
//     Route::get('group', function () {
//         echo "Welcome";
//         return view('welcome');
//     });
// });

// Route::get('parameter', function () {
//     echo "Middleware parameters";
// })->middleware('check_role:user');

// //Bài tập về Middleware
// Route::get('test', 'TestMiddlewareController@printToken')->middleware('check_token');

// //Request
// Route::post('login', 'UserController@login');

// Route::get('request-method', function (Request $request) {
//     echo "Request Path: " . $request->path();
//     echo "<br>";

//     echo "Request Url: " . $request->url();
//     echo "<br>";

//     echo "Request full Url" . $request->fullUrl();
//     echo "<br>";

//     echo "Request IP: " . $request->ip();
//     echo "<br>";
//     echo "<br>";

//     echo "Request Server: ";
//     var_dump($request->server());
// });

// //Input
// Route::get('post-form', function () {
//     return view('post-form');
// });

// Route::post('showInfo', [
//     'as' => 'showInfo',
//     'uses' => 'InputController@showInfo'
// ]);

// //Blade
// Route::get('blade', function () {
//     return view('child');
// });

// //Response
// Route::get('home', function () {
//     return response('Hello World', 200)->header('Content-Type', 'text/plain');
// });

//Bai tap View Blade Template
Route::get('test-blade', function () {
    return view('layouts.test');
});

// //Query Builder
// Route::get('insert-post', function () {
//     // DB::table('posts')->insert([
//     //     'title' => 'Hello World 1',
//     //     'url' => 'localhost/post1',
//     //     'content' => 'Content 1',
//     //     'status' => 1
//     // ]);

//     DB::table('posts')->insert([
//         [
//             'title' => 'Hello World 2',
//             'url' => 'localhost/post2',
//             'content' => 'Content 2',
//             'status' => 0
//         ],
//         [
//             'title' => 'Hello World 3',
//             'url' => 'localhost/post3',
//             'content' => 'Content 3',
//             'status' => 1
//         ]
//     ]);
// });

// Route::get('update-post', function () {
//     DB::table('posts')->where('id', '=', 2)->update(['status' => 2]);
//     // DB::table('posts')->where('id', 2)->update(['status' => 2]);
// });

// Route::get('delete-post', function () {
//     DB::table('posts')->where('id', 3)->delete();
// });

// Route::get('get', function () {
//     $posts = DB::table('posts')->get();
//     dd($posts);
// });

// Route::get('first', function () {
//     $firstPost = DB::table('posts')->first();
//     dd($firstPost);
// });

// Route::get('select', function () {
//     $posts = DB::table('posts')->select('title', 'url', 'content')->get();
//     dd($posts);
// });

// Route::get('join', function () {
//     $posts = DB::table('posts')->join('comments', 'posts.id', '=', 'comments.post_id')
//         ->select('posts.id', 'title', 'url', 'content', 'content_comment')->get();
//     dd($posts);
// });

// Route::get('where', function () {
//     $posts = DB::table('posts')->whereNotIn('status', [1, 2])->get();
//     dd($posts);
// });

// Route::get('orderBy', function () {
//     $posts = DB::table('posts')->orderBy('status')->get();
//     dd($posts);
// });

//Bai tap Query Builder
// Route::namespace('Post')->prefix('post')->group(function () {
//     Route::get('list', [
//         'as' => 'list',
//         'uses' => 'PostController@showPostsList'
//     ]);

//     Route::get('create-post', function () {
//         return view('posts.create-post');
//     });
// });

Route::resource('post', 'Post\PostController');
