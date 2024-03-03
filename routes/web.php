<?php

use App\Http\Controllers\StudentController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', 'student/createPage')->name('student#home');
Route::get('student/createPage', [StudentController::class, 'create'])->name('student#createPage');
Route::post('student/create', [StudentController::class, 'studentCreate'])->name('student#create');
Route::get('student/delete/{id}', [StudentController::class, 'studentDelete'])->name('student#delete');
Route::get('student/updatePage/{id}', [StudentController::class, 'updatePage'])->name('student#updatePage');
Route::get('student/editPage/{id}', [StudentController::class, 'editPage'])->name('student#editPage');
Route::post('student/update', [StudentController::class, 'update'])->name('student#update');
