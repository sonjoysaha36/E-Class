<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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


route::get('/',[HomeController::class,'index']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
route::get('/redirect',[HomeController::class,'redirect']);

route::get('/view_category',[AdminController::class,'view_category']);
route::post('/add_category',[AdminController::class,'add_category']);

route::get('/view_product',[AdminController::class,'view_product']);
route::post('/add_course',[AdminController::class,'add_course']);
route::post('/update_course/{id}',[AdminController::class,'update_course']);

route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
route::get('/delete_course/{id}',[AdminController::class,'delete_course']);
route::get('/edit_course/{id}',[AdminController::class,'edit_course']);
route::get('/upload_video/{id}',[AdminController::class,'upload_video']);
route::post('/upload_course_video',[AdminController::class,'upload_course_video']);
// upload video

route::get('/show_course',[AdminController::class,'show_course']);

route::get('/add_cart/{id}',[HomeController::class,'add_cart']);