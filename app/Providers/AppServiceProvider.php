<?php

namespace App\Providers;
use App\Models\setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if (!Schema::hasTable('settings'))
         {
            Schema::create('settings', function($table){

                   $table->increments('id');
                   $table->string('logo')->nullable();
                   $table->string('metaDesc')->nullable();
                   $table->string('seo_title')->nullable();
                   $table->string('tags')->nullable();
                   $table->string('email')->nullable();
                   $table->string('phone')->nullable();
                   $table->string('mobilePone')->nullable();
                   $table->string('address')->nullable();
                   $table->string('facebook')->nullable();
                   $table->string('instagram')->nullable();
                   $table->string('twitter')->nullable();
                   $table->string('youtube')->nullable();
            });
           }



        $setting= $setting = setting::all();
        if(! isset($setting[0]))
        {

        $setting = [0=>['logo'=>"",'metaDesc'=>"",'seo_title'=>""
        ,'tags'=>"",'email'=>"",'phone'=>"",'mobilePone'=>"",'address'=>"",
        'facebook'=>"",'instagram'=>"",'twitter'=>"",'youtube'=>""]];
         }

        View::share('setting',$setting);

    }
}
