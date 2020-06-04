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

Route::get('/hello', 'PostController@hello');

Route::get('index', 'HomeController@index');

Route::get('post/{category}/{post_id}', 'PostController@index')
    ->where(['category' => '[a-zA-Z]+', 'post_id' => '[0-9]+']);

Route::get('profile/{id}', 'InvokeController');

/*Middleware*/
Route::get('login', function () {
    return view('login');
});

Route::get('middle', function () {
    echo "Middleware test";
})->middleware('check_token');

//Middleware Group
Route::group(['middleware' => ['web']], function () {
    Route::get('group', function () {
        echo "Welcome";
        return view('welcome');
    });
});

Route::get('parameter', function () {
    echo "Middleware parameters";
})->middleware('check_role:user');

//Bài tập về Middleware
Route::get('test', 'TestMiddlewareController@printToken')->middleware('check_token');

//Request
Route::post('login', 'UserController@login');

Route::get('request-method', function (Request $request) {
    echo "Request Path: " . $request->path();
    echo "<br>";

    echo "Request Url: " . $request->url();
    echo "<br>";

    echo "Request full Url" . $request->fullUrl();
    echo "<br>";

    echo "Request IP: " . $request->ip();
    echo "<br>";
    echo "<br>";

    echo "Request Server: ";
    var_dump($request->server());
});

//Blade
Route::get('blade', function () {
    return view('child');
});

//Bai tap View Blade
Route::get('test-blade', function () {
    return view('layouts.test');
});
