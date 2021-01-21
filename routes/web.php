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
    $tests = App\Models\Tests\Tests::all();
    return view('testList')->with('tests', $tests);
});
Route::get('/test/{id}', 'App\Http\Controllers\testController@index');
Route::get('/admin/tests/query', 'App\Http\Controllers\AdminMenuController@index');
Route::get('/lib', 'App\Http\Controllers\LibController@index');
Route::get('/lib/{id}', 'App\Http\Controllers\LibController@show');