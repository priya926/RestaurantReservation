<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Models\contacts;
use App\Http\Controllers\UregController;
use App\Models\uregistrations;
use App\Http\Controllers\TableController;
use App\Models\tables;
use App\Http\Controllers\AdminController;
use App\Models\admins;
use App\Http\Controllers\RestroController;
use App\Models\Restrodetail;
use App\Http\Controllers\HelpController;
use App\Models\helps;
use App\Http\Controllers\AuthController;
use App\Models\User;


Route::get('/', function () {
    return view('homepage');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/reservation', function () {
    return view('reservation');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/restaurant', function () {
    return view('restaurant');
});
Route::get('/restrodash', function () {
    return view('restrodash');
});
// Route::get('/restroupdate', function () {
//     return view('restroupdate');
// });
Route::get('/restro_details', function () {
    return view('restro_details');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admindashboard', function () {
    return view('admindashboard');
});
Route::get('/feedback', function () {
    return view('feedback');
});
Route::get('/helpdesk', function () {
    return view('helpdesk');
});
Route::get('/terms', function () {
    return view('terms');
});
Route::get('/v', function () {
    return view('view_reserve');
});

Route::view('contactf','contact');
Route::post('contactf',[ContactController::class,'addContact']);
Route::view('register','footer');
Route::post('register',[UregController::class,'udata']);

Route::view('/table','/index/{id}');
Route::post('/table',[TableController::class,'addData'])->name('save.table');

Route::post('user',[UserAuth::class,'userLogin']);
Route::view('login','footer');

Route::view('helps','helpdesk');
Route::post('helps',[HelpController::class,'addHelp']);

Route::view('rregister','index');
Route::view('uregister','blog');
Route::post('/uregister',[UregController::class,'udata'])->name('uregister');
Route::post('/ulogin',[UregController::class,'uldata'])->name('ulogin');
// Route::get('/blogg',[UregController::class,'user']);
Route::view('alogin','admindashboard');
Route::post('/alogin',[AdminController::class,'adata'])->name('alogin');
Route::get('/admindashboard',[AdminController::class,'aget']);
Route::get('/restro_details',[RestroController::class,'addData'])->name('data.add');
Route::post('/restro_details',[RestroController::class,'saveData'])->name('save.data');
// Route::get('restrolist',[RestroController::class,'restroList'])->name('restro.list');

//to show restro-box on blog page
Route::get('blog',[RestroController::class,'restroShow'])->name('restro.show');

// Route::get('/restroupdate/{id}',[RestroController::class,'editRestro'])->name('restro.edit');
// Route::post('/update.restro/{id}',[RestroController::class,'restroUpdate']);

Route::get('/restroupdate/{id}',[RestroController::class,'restrooShow']);
Route::post('/restroupdate/{id}',[RestroController::class,'update']);

//to show index pages
Route::get('/index/{id}',[RestroController::class,'indexShow']);

Route::get('view_restro',[AdminController::class,'viewRestro'])->name('restro.view');
Route::get('view_user',[AdminController::class,'viewUser'])->name('user.view');
// Route::get('restaurant',[RestroController::class,'restrodash'])->name('restro.dash');
//RESTRO AUTH ROUTE
Route::get('rlogin', [AuthController::class, 'rindex'])->name('rlogin');
Route::post('submit-rlogin', [AuthController::class, 'postRlogin'])->name('rlogin.post'); 
Route::get('rregistration', [AuthController::class, 'rregistration'])->name('rregister');
Route::post('submit-rregistration', [AuthController::class, 'postRregistration'])->name('rregister.post'); 
Route::get('restrodash', [AuthController::class, 'rdashboard']); 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('view_reserve',[RestroController::class,'viewReserve'])->name('reserve.list');

Route::post('/delete-user/{id}',[AdminController::class,'deleteUser'])->name('user.delete');
Route::post('/delete-restro/{id}',[AdminController::class,'deleteRestro'])->name('restro.delete');