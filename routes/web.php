<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProjectsController;




/*

|---------------------------------------------------------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
|---------------------------------------------------------------------------------------------------------------------------
|                               USER Routes
|---------------------------------------------------------------------------------------------------------------------------
|
*/
Route::get('/', function () {
    return view('welcome');
});
// Here We are getting Project Controller and its Show method
//Route::get('/projects', 'ProjectController@show ');

Route::get('/Admin', function () {
    return view('/Admin.Admin_dashboard');
});

/*
|---------------------------------------------------------------------------------------------------------------------------
|                               PROJECT Routes
|---------------------------------------------------------------------------------------------------------------------------
|
*/

/*
|---------------------------------------------------------------------------------------------------------------------------
|                               YAJRA DATA TABLES
|---------------------------------------------------------------------------------------------------------------------------
|
*/

// YAJRA DATATABLES route for PROJECT FORM
Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'show'])->name('projects');
// TECHNOLOGIES ROUTE
// Route::get('/projects/pdflandscape', [App\Http\Controllers\ProjectsController::class, 'tech'])->name('projects.pdf_landscape');

//YAJRA DATATABLES function calling for PROJECT FORM
Route::get('/projects/list', [App\Http\Controllers\ProjectsController::class, 'getData'])->name('projects.list');
//  Route::post('/projects/pdflandscape', [App\Http\Controllers\ProjectsController::class, 'singlepdf'])->name('projects.pdflandscape');

// get Method For add new record for PROJECT FORM 
Route::get('/projects/add', [App\Http\Controllers\ProjectsController::class, 'addProject'])->name('projects.add');
//Edit Route for PROJECT FORM
Route::get('/projects/edit/{id}', [App\Http\Controllers\ProjectsController::class, 'editProject'])->name('projects.edit');
// UPDATE IN DATABASE for PROJECT FORM 
Route::post('/projects/edit/{id}', [App\Http\Controllers\ProjectsController::class, 'updateProject'])->name('projects.update');
// Delete Record for PROJECT FORM
Route::get('/projects/delete/{id}', [App\Http\Controllers\ProjectsController::class, 'deleteProject'])->name('projects.delete');
// PDF GENERATE
Route::GET('/projects/pdflandscape/{id}', [App\Http\Controllers\ProjectsController::class, 'pdf_landscape'])->name('projects.pdflandscape');
// PDF Generate on checked
Route::post('/projects/pdf', [App\Http\Controllers\ProjectsController::class, 'pdfView'])->name('projects.pdf');



// Route::get('/projects-data', [App\Http\Controllers\ProjectsController::class, 'getData']);

// post Method For Form submission
Route::post('/projects/add', [App\Http\Controllers\ProjectsController::class, 'saveProject'])->name('projects.saveProject');




Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Post method for user logout
Route::post('/user/logout', [App\Http\Controllers\Auth\LoginController::class, 'userLogout'])->name('user.logout');



// Route::get('/projects', [App\Http\Controllers\ProjectsController::class, 'Filter'])->name('projects.Filter');




/*
|---------------------------------------------------------------------------------------------------------------------------
|                               Admin Routes
|---------------------------------------------------------------------------------------------------------------------------
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