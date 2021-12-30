<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectsController;




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


/*
|--------------------------------------------------------------------------
|                               USER Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', function () {
    return view('welcome');
});
// Here We are getting Project Controller and its Show method
//Route::get('/projects', 'ProjectController@show ');
Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'show'])->name('projects');
Route::get('/projects/add', [App\Http\Controllers\ProjectsController::class, 'addProject'])->name('projects.add');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Post method for user logout
Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');

/*
|--------------------------------------------------------------------------
|                               Admin Routes
|--------------------------------------------------------------------------
|
*/
Route::group(['prefix'=> 'admin'],function(){
Route::group(['midleware'=>'admin.guest'],function(){
    // Admin guest will login view route 
    Route::view ('/login','admin.login')->name('admin.login');
    // It will authenticate guest admin login
    Route::post('/login',[App\Http\Controllers\AdminController::class ,'authenticate'])->name('admin.auth');


    });
    // This Route will use by admin,
    Route::group(['midleware','admin.auth'],function(){
        // Admin will login and after login it wil show dashboard
        Route::get('/Dashboard',[App\Http\Controllers\DashboardController :: class, 'dashboard'])->name('admin.dashboard');
    });
    // post method for admin logout
        Route::get('/logout',[App\Http\Controllers\AdminController :: class, 'Logout'])->name('admin.Logout');
    
});                