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
Route::get('login', function (){
    return view('login');
});

Route::get('middle',function(){
    echo "Middleware test";
})->middleware('check_token');

//Middleware Group
Route::group(['middleware' => ['web']], function () {
    Route::get('group',function(){
        echo "Welcome";
        return view('welcome');
    });
});

Route::get('parameter', function () {
    echo "Middleware parameters";
})->middleware('check_role:user');
