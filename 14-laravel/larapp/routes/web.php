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
Route::get('hello', function () {
    
    return "<h1> Hello, this is a simple route¡ </h1>"; 
    
});

Route::get('examples/users', function () {
    $users = App\Models\User::all();
    dd($users); 
    //return var_dump($users);
});

Route::get('examples/challenges', function () {
    $users = App\Models\User::all();
    return view('challenges')->with('users', $users);
});