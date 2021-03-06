<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Post;

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
            $table->string('name');
            $table->string('slug');
            $table->text('content');
            $table->integer('counts_comment')->default(0);
            $table->integer('category_id');
            $table->integer('user_id')->default(0);
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
    public function for (){

    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
