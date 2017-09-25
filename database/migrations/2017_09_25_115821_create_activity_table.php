<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cover')->nullable();
            $table->string('title');
            $table->string('subtitle');
            $table->text('about_head');
            $table->text('about_detail');
            $table->string('date');            
            $table->string('organizer');
            $table->text('roles');
            $table->text('skills');
            $table->string('link')->nullable();
            $table->string('category')->nullable();
            $table->text('more_image')->nullable();
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
        Schema::dropIfExists('activity');
    }
}
