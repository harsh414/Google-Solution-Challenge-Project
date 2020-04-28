<?php

use App\regist;
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

Route::get('/',function(){
    $registerant =  regist::all();
    return view('welcome',[
        'registerant' => $registerant
    ]);
});
Route::get('/about','PageController@about');
Route::get('/inform','PageController@inform');
Route::post('/inform','PageController@store')->name('addimage');
Route::get('/register','PageController@register');
Route::post('/register','PageController@savetwo')->name('goregis');
Route::get('/donate','PageController@donate');
Route::post('/donate','PageController@pay')->name('pay');

Route::get('/cases','PageController@cases');


