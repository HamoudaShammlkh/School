<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    /* 6:36 pm */
    return view('welcome');
});
Route::get('all_students',function (){
   return \App\Models\Student::all();
});
Route::get('all_cities',function (){
   return \App\Models\City::all();
});
