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

Route::get('/personil', 'PersonilController@index');
Route::get('/member', 'MemberController@index');
Route::get('/member/add', 'MemberController@create');
Route::get('/member/edit/{id}', 'MemberController@edit');

Route::post('/member/proses-add', 'MemberController@store');
Route::post('/member/proses-edit/{id}', 'MemberController@update');
Route::post('/member/proses-delete/{id}', 'MemberController@destroy');


Route::get('/tentang', function () {
    return view('tentang');
});
