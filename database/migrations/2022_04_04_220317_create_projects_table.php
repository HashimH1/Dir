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
        Schema::create('projects', function (Blueprint $table) {

            $table->increments('id');
            $table->string('title');
            $table->text('image');
            $table->text('desc')->nullable();
            $table->string('client')->nullable();

            $table->string('category');
            $table->date('date')->nullable();
            $table->boolean('status');

            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('pinterest')->nullable();
            $table->string('instagram')->nullable();


            $table->timestamps();

            // $table->foreign('category_id')->references('id')->on('project_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
