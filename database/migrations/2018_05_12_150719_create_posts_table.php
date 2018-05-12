<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->text('content');
            $table->integer('counts_comment')->default(0);
            $table->integer('category_id');
            $table->integer('user_id');
            $table->timestamps();
        });
        for ($i=0; $i < 10 ; $i++) { 
            Post::create([
                'name'=>'Post'.$i,
                'slug'=>'post-'.$i,
                'content'=>'lorem Ipsum', 
                'counts_comment'=>0,
                'category_id'=>1,

            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
