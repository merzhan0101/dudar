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

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');


Route::get('/review','App\Http\Controllers\MainController@review');

Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');

Route::get('/news', function(){
    return view('news');
})->name('news');

Route::get('/contacts', function(){
    return view('contacts');
})->name('contacts');

Route::post('/contacts/submit', function () { 
    dd(Request::all());
 })->name('contact-form');



//Route::get('/contacts', 'App\Http\Controllers\MainController@contacts');

// Route::get('/user/{id}/{name}', function($id, $name){
//     return 'ID: '. $id.'. Name: '.$name;
// });