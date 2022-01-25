<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     $name = 'Bianca Pantoja';
//     //return view('trial', compact('name'));
//     return view('welcome');
// });

// Route::prefix('test')->group(function() {
//     Route::get('/greetings', function() {
//         return "hello world!";
//     })->name('greeting');
    
//     Route::get('/user/{id?}', function($id = 'default'){
//         return "USERID = {$id}";
//     })->name('user with id');
    
//     Route::get('/post/{comment}/{user}', function($user_id, $comment_id){
//         return "USERID = {$user_id}<br/>COMMENTID = {$comment_id}";
//     })->name('post comment user');
// });

// Route::prefix('pages')->group(function() {
//     Route::get('/test', [App\Http\Controllers\PagesController::class, 'test'])->name('pages.test');
//     Route::get('/contact-us', [PagesController::class, 'contacts'])->name('pages.contact');
//     Route::get('/', [PagesController::class, 'welcome'])->name('pages.welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/', function() {
//     return view('student.students');
// });

Route::get('/', [StudentController::class, 'myProfile'])->name('STSIMS');

Route::prefix('student')->group(function() {
    Route::get('/', [StudentController::class, 'myProfile'])->name('Home');
    Route::get('subjects', [StudentController::class, 'enrolledSubjects'])->name('Enrolled Subjects');
    Route::get('profiles', [StudentController::class, 'myProfile'])->name('Student Profile');
    Route::get('grades', [StudentController::class, 'grades'])->name('Student Grades');

});