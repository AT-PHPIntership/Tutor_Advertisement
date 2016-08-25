<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                  ->references('id')->on('users');
            $table->boolean('type');
            $table->string('title');
            $table->text('content');
            $table->boolean('status')->default(0);
            $table->integer('reviewer_id')->unsigned();
            $table->foreign('reviewer_id')
                  ->references('id')->on('users');
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')
                  ->references('id')->on('categories');
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
                  ->references('id')->on('cities');
            $table->float('lat')->default(0);
            $table->float('lng')->default(0);
            $table->boolean('closed')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
