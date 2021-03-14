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
Route::view('/','front_end/index');
Route::view('/about','front_end/about');
Route::view('/privacy','front_end/privacy');
Route::view('/disclaimer','front_end/disclaimer');




Route::get('/front_end/contact',[App\Http\Controllers\AdminController::class,'contact'])->name('admin');
Route::post('/front_end/contact',[App\Http\Controllers\AdminController::class,'contact_db'])->name('admin');


Route::get('/admin/adminindex',[App\Http\Controllers\AdminController::class,'adminindex'])->name('admin');

Route::get('/admin/adminpages/privatejob',[App\Http\Controllers\AdminController::class,'privatejob'])->name('admin');
Route::post('/admin/adminpages/privatejob',[App\Http\Controllers\AdminController::class,'privatejob_db'])->name('admin');
Route::get('/front_end/privatejob',[App\Http\Controllers\AdminController::class,'privatejobdetails'])->name('admin');
Route::get('/front_end/privatejob/{tab}',[App\Http\Controllers\AdminController::class,'privatejobdetailsdescribtion'])->name('admin');


Route::get('/admin/adminpages/govtjob',[App\Http\Controllers\AdminController::class,'govtjob'])->name('admin');
Route::post('/admin/adminpages/govtjob',[App\Http\Controllers\AdminController::class,'govtjob_db'])->name('admin');
Route::get('/front_end/govtjob',[App\Http\Controllers\AdminController::class,'govtjobdetails'])->name('admin');

Route::get('/front_end/govtjob/{tab}',[App\Http\Controllers\AdminController::class,'jobdetailsdescribtion'])->name('admin');


Route::get('/admin/adminpages/qa',[App\Http\Controllers\AdminController::class,'qa'])->name('admin');
Route::post('/admin/adminpages/qa',[App\Http\Controllers\AdminController::class,'qa_db'])->name('admin');
Route::get('/front_end/qa',[App\Http\Controllers\AdminController::class,'qas_enquiry'])->name('admin');

Route::get('/admin/adminpages/iscode',[App\Http\Controllers\AdminController::class,'iscode'])->name('admin');
Route::post('/admin/adminpages/iscode',[App\Http\Controllers\AdminController::class,'iscode_db'])->name('admin');
Route::get('/front_end/iscode',[App\Http\Controllers\AdminController::class,'iscodes_enquiry'])->name('admin');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


