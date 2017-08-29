<?php

use App\Http\Controllers\UserController;

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
Route::get('/register', function () {
        return view('register');
});
Route::get('/signin', function () {
        return view('signin');
});
Route::get('/dashboard',[
 'uses'=>'UserController@getDashboard',
 'as'=>'dashboard' 
] 
);  
Route::get('/',[
    'uses'=>'UserController@getHome',
    'as'=>'home'
]
    );  
Route::get('/logout',[
    'uses'=>'UserController@getLogOut',
    'as'=>'logout'
]
    ); 
 Route::post('/signup',[
 
 'uses'=>'UserController@postSignup',
 'as'=>'signup'   
 ]);
 Route::post('/signin',[
     
     'uses'=>'UserController@postSignin',
     'as'=>'signin'
 ]);
        