<?php

use Illuminate\Support\Facades\Route;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
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

Route::group(['prefix' =>LaravelLocalization::setLocale(),
'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
], function() {

      Route::get('login', [\App\Http\Controllers\panel\authController::class, 'index'])->name('login');

      Route::post('login/store', [\App\Http\Controllers\panel\authController::class, 'store'])->name('login.store');

       Route::get('', [\App\Http\Controllers\panel\home::class, 'index'])->name('home');

        Route::get('', [\App\Http\Controllers\panel\home::class, 'index'])->name('home');

        Route::get('about', [\App\Http\Controllers\panel\home::class, 'about'])->name('about');

       // Route::get('news', [\App\Http\Controllers\panel\home::class, 'news'])->name('news');

       Route::get('news', [\App\Http\Controllers\panel\home::class, 'news'])->name('news');
       Route::POST('newss', [\App\Http\Controllers\panel\home::class, 'getnews'])->name('get.news');

       Route::get('news/details/{id}', [\App\Http\Controllers\panel\home::class, 'newsDetails'])->name('news.details');


       Route::get('projects_desc/{id}', [\App\Http\Controllers\panel\home::class, 'projects_desc'])->name('projects.desc');

       Route::get('projects', [\App\Http\Controllers\panel\home::class, 'projects'])->name('projects');

       Route::get('apply', [\App\Http\Controllers\panel\ApplyController::class, 'create'])->name('apply');


       Route::POST('apply', [\App\Http\Controllers\panel\ApplyController::class, 'store'])->name('apply.store');

       Route::get('ContactUS', [\App\Http\Controllers\panel\home::class, 'contactCreate'])->name('contact.us.create');


       Route::POST('comment', [\App\Http\Controllers\panel\CommentController::class, 'store'])->name('comment.store');


    });

