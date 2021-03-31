<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Dashboard\MainPagesController;

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



//Accueil Routes
Route::get('/', 'App\Http\Controllers\PagesController@acceuil')->name('accueil.index');

Route::middleware('can:is_admin')->group(function(){
    /* DASHBOARD ROUTES */
    //Dashboard Accueil Routes
    Route::get('/admin/dashboard', 'App\Http\Controllers\PagesController@dashboard')->name('dashboard.index');
    //Main Routes
    Route::get('/admin/main', 'App\Http\Controllers\Dashboard\MainPagesController@index')->name('dashboard.main');
    Route::put('/admin/main', 'App\Http\Controllers\Dashboard\MainPagesController@update')->name('dashboard.main.update');
    //Contact Routes
    Route::get('/admin/contact', 'App\Http\Controllers\Dashboard\ContactPagesController@index')->name('dashboard.contact');
    Route::put('/admin/contact', 'App\Http\Controllers\Dashboard\ContactPagesController@update')->name('dashboard.contact.update');
    //Me Routes
    Route::get('/admin/me', 'App\Http\Controllers\Dashboard\MePagesController@index')->name('dashboard.me');
    Route::put('/admin/me', 'App\Http\Controllers\Dashboard\MePagesController@update')->name('dashboard.me.update');
    //Skill Routes
    Route::get('/admin/skill', 'App\Http\Controllers\Dashboard\SkillPagesController@index')->name('dashboard.skill');
    Route::put('/admin/skill', 'App\Http\Controllers\Dashboard\SkillPagesController@update')->name('dashboard.skill.update');
    //Project Routes
    Route::get('/admin/project', 'App\Http\Controllers\Dashboard\ProjectPagesController@index')->name('dashboard.project');
    Route::put('/admin/project', 'App\Http\Controllers\Dashboard\ProjectPagesController@update')->name('dashboard.project.update');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware ('auth', 'verified')->group (function () {
    Route::resource ('profile', 'App\Http\Controllers\ProfileController', [
        'only' => ['edit', 'update', 'destroy', 'show'],
        'parameters' => ['profile' => 'user']
    ]);
    
});

Route::name('admin.')->middleware('can:is_admin')->group(function() {
    Route::resource('/admin/users', 'App\Http\Controllers\Admin\UsersController');
});
