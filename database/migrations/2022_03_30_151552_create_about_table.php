<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {

            $table->increments('id');
            $table->string('banner')->nullable();
            $table->string('banner_text')->nullable();
            $table->string('About_Company')->nullable();
            $table->string('About_imge_one')->nullable();
            $table->string('About_imge_two')->nullable();
            $table->string('vision_text')->nullable();
            $table->string('vision_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about');
    }
};
