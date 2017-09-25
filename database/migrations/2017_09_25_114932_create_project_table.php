<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cover')->nullable();
            $table->string('title');
            $table->string('subtitle');
            $table->string('about_head');
            $table->string('about_detail');
            $table->string('material');
            $table->string('roles');
            $table->string('skills');
            $table->string('link')->nullable();
            $table->string('category');
            $table->string('more_image')->nullable();
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
        Schema::dropIfExists('project');
    }
}
