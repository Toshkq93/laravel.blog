<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->text('description');
            $table->unsignedBigInteger('category_id')->unsigned()->index();
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->timestamps();
        });
        /*Schema::table('posts', function ($table){
            $table->foreign('category_id')->references('id')->on('categories');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Schema::table('posts', function ($table)
        {
            $table->dropForeign(['category_id']);
        });*/
        Schema::dropIfExists('posts');
    }
}
