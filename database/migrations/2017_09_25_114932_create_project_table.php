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
            $table->string('title', 200);
            $table->string('subtitle', 300);
            $table->text('about_head');
            $table->text('about_detail')->nullable();
            $table->text('material');
            $table->text('roles');
            $table->text('skills');
            $table->string('link')->nullable();
            $table->string('category');
            $table->text('more_image')->nullable();
            $table->text('video')->nullable();            
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
