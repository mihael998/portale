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

Route::get('/', function () {
    return redirect("/strutture");
});
Route::get("/login","LoginController@showLoginForm");
Route::post("/logout","LoginController@logout")->name("logout");
Route::post("login","LoginController@login")->name("login");

Route::get('/strutture', 'StruttureController@index')->name('strutture');
Route::get('/strutture/{id}', 'StruttureController@show')->name("struttura");

Route::patch("/strutture/{id}","StruttureController@update");
Route::get('/strutture/{id}/settings', 'StruttureController@edit')->name("settings");
