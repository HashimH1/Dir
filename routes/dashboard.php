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



Route::group(['prefix' => LaravelLocalization::setLocale(),'middleware'=>'auth'], function() {


    Route::group(['prefix' => 'admin'],function(){
        Route::get('', [\App\Http\Controllers\dashboard\ProjectController::class, 'index'])->name('admin.project.index');


        Route::get('settigs', [\App\Http\Controllers\dashboard\home::class, 'settigs'])->name('settigs');
        Route::post('settigs', [\App\Http\Controllers\dashboard\home::class, 'settigs_store'])->name('settings.store');

        Route::get('slider', [\App\Http\Controllers\dashboard\home::class, 'sliderIndex'])->name('slider.index');
        Route::get('newSlider', [\App\Http\Controllers\dashboard\home::class, 'slider'])->name('slider');
        Route::post('slider', [\App\Http\Controllers\dashboard\home::class, 'slider_store'])->name('slider_store');
        Route::get('editSlider/{id}', [\App\Http\Controllers\dashboard\home::class, 'edit_slider'])->name('edit.slider');
        Route::post('editSlider', [\App\Http\Controllers\dashboard\home::class, 'uodate_slider'])->name('uodate.slider');
        Route::get('deleteSlider/{id}', [\App\Http\Controllers\dashboard\home::class, 'delete_slider'])->name('delete.slider');


        Route::get('about', [\App\Http\Controllers\dashboard\aboutC::class, 'about'])->name('admin.about');
        Route::post('about', [\App\Http\Controllers\dashboard\aboutC::class, 'about_store'])->name('about.store');

        Route::get('behind', [\App\Http\Controllers\dashboard\BehindController::class, 'index'])->name('admin.behind.index');
        Route::get('behindCreate', [\App\Http\Controllers\dashboard\BehindController::class, 'create'])->name('admin.behind.create');
        Route::post('behind', [\App\Http\Controllers\dashboard\BehindController::class, 'store'])->name('admin.behind.store');
        Route::get('behindEdit/{id}', [\App\Http\Controllers\dashboard\BehindController::class, 'edit'])->name('admin.behind.edit');
        Route::post('behindUpdate', [\App\Http\Controllers\dashboard\BehindController::class, 'update'])->name('admin.behind.update');
        Route::get('behinDelete/{id}', [\App\Http\Controllers\dashboard\BehindController::class, 'destroy'])->name('admin.behind.destroy');


        Route::get('blogs', [\App\Http\Controllers\dashboard\NewsController::class, 'index'])->name('admin.news.index');
        Route::get('news/create', [\App\Http\Controllers\dashboard\NewsController::class, 'create'])->name('admin.news.create');
        Route::post('news', [\App\Http\Controllers\dashboard\NewsController::class, 'store'])->name('admin.news.store');
        Route::get('newsEdit/{id}', [\App\Http\Controllers\dashboard\NewsController::class, 'edit'])->name('admin.news.edit');
        Route::post('newsUpdate', [\App\Http\Controllers\dashboard\NewsController::class, 'update'])->name('admin.news.update');
        Route::get('newsDelete/{id}', [\App\Http\Controllers\dashboard\NewsController::class, 'destroy'])->name('admin.news.destroy');


        Route::group(['prefix' => 'category'],function(){

        Route::get('', [\App\Http\Controllers\dashboard\ProjectCategoriesController::class, 'index'])->name('admin.category.index');
        Route::get('create', [\App\Http\Controllers\dashboard\ProjectCategoriesController::class, 'create'])->name('admin.category.create');
        Route::POST('store', [\App\Http\Controllers\dashboard\ProjectCategoriesController::class, 'store'])->name('admin.category.store');
        Route::get('edit/{id}', [\App\Http\Controllers\dashboard\ProjectCategoriesController::class, 'edit'])->name('admin.category.edit');
        Route::POST('update', [\App\Http\Controllers\dashboard\ProjectCategoriesController::class, 'update'])->name('admin.category.update');
        Route::get('delete/{id}', [\App\Http\Controllers\dashboard\ProjectCategoriesController::class, 'destroy'])->name('admin.category.delete');


        });

        Route::group(['prefix' => 'project'],function(){

            Route::get('', [\App\Http\Controllers\dashboard\ProjectController::class, 'index'])->name('admin.project.index');
            Route::get('create', [\App\Http\Controllers\dashboard\ProjectController::class, 'create'])->name('admin.project.create');
            Route::POST('store', [\App\Http\Controllers\dashboard\ProjectController::class, 'store'])->name('admin.project.store');
            Route::get('edit/{id}', [\App\Http\Controllers\dashboard\ProjectController::class, 'edit'])->name('admin.project.edit');
            Route::POST('update', [\App\Http\Controllers\dashboard\ProjectController::class, 'update'])->name('admin.project.update');
            Route::get('delete/{id}', [\App\Http\Controllers\dashboard\ProjectController::class, 'destroy'])->name('admin.project.delete');

        });


        Route::group(['prefix' => 'trustedClients'],function(){

            Route::get('', [\App\Http\Controllers\dashboard\TrustedClientsController::class, 'index'])->name('admin.trusted.index');
            Route::get('create', [\App\Http\Controllers\dashboard\TrustedClientsController::class, 'create'])->name('admin.client.create');
            Route::POST('store', [\App\Http\Controllers\dashboard\TrustedClientsController::class, 'store'])->name('admin.client.store');
            Route::get('edit/{id}', [\App\Http\Controllers\dashboard\TrustedClientsController::class, 'edit'])->name('admin.client.edit');
            Route::POST('update', [\App\Http\Controllers\dashboard\TrustedClientsController::class, 'update'])->name('admin.client.update');
            Route::get('delete/{id}', [\App\Http\Controllers\dashboard\TrustedClientsController::class, 'destroy'])->name('admin.client.delete');

        });


        Route::group(['prefix' => 'role'],function(){

            Route::get('create', [\App\Http\Controllers\RoleController::class, 'create'])->name('admin.role.create');


        });

        Route::group(['prefix' => 'admin','middleware'=>'role:super_admin'],function(){

        Route::get('admin', [\App\Http\Controllers\dashboard\admin::class, 'index'])->name('admin.register.index');

        Route::get('create', [\App\Http\Controllers\dashboard\admin::class, 'create'])->name('admin.register.create');

        Route::POST('admin', [\App\Http\Controllers\dashboard\admin::class,'store'])->name('admin.register');

        Route::get('edit/{id}', [\App\Http\Controllers\dashboard\admin::class, 'edit'])->name('admin.admin.edit');

        Route::POST('update', [\App\Http\Controllers\dashboard\admin::class,'update'])->name('admin.admin.update');

        Route::get('delete/{id}', [\App\Http\Controllers\dashboard\admin::class, 'destroy'])->name('admin.delete');

        });

        Route::get('apply', [\App\Http\Controllers\panel\ApplyController::class, 'index'])->name('apply.index');
        Route::get('apply/delete/{id}', [\App\Http\Controllers\panel\ApplyController::class, 'destroy'])->name('apply.delete');

        Route::get('apply/file/{id}', [\App\Http\Controllers\panel\ApplyController::class, 'openfile'])->name('open.file.apply');




       Route::get('comment', [\App\Http\Controllers\dashboard\CommentController::class, 'index'])->name('admin.comment.index');
       Route::get('comment/delete/{id}', [\App\Http\Controllers\dashboard\CommentController::class, 'destroy'])->name('comment.delete');


        Route::get('logout',function(){
            Auth::logout();

            return redirect()->route('home');
        })->name('admin.logout');

    });
    });
    // Auth::routes();

   // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

