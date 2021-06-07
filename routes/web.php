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
use App\Models\notifications;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home');
});


//    
//Route::post('course','ArticleController@store');
Route::get('courses','App\Http\Controllers\CourseController@index');
Route::get('course/{course}','App\Http\Controllers\CourseController@show');
Route::get('course/{course}/lesson','App\Http\Controllers\CourseController@show_lessons');

Route::get('course/{course}/lesson/{lesson}','App\Http\Controllers\LessonController@show');
Route::get('/contact', function () { return view('contact'); });
Route::get('/about-me', function () {

foreach (notifications::all() as $flight) {
    echo $flight->username;
}
    return view('about');
})->name('about');