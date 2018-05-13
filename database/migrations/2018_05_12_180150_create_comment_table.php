<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Comment;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->text('content');
            $table->integer('users_id');
            $table->integer('post_id');
            $table->timestamps();

        });
        
            Comment::create([
                    'content'=>'Un commentaire',
                    'user_id'=>1,
                    'post_id'=>1,
            ]);
            Comment::create([
                    'content'=>'Un commentaire',
                    'user_id'=>1,
                    'post_id'=>1,
            ]);
            Comment::create([
                    'content'=>'Un commentaire',
                    'user_id'=>1,
                    'post_id'=>1,
            ]);
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
