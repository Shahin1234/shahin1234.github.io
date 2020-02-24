<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fuser_id');
//            $table->integer('fuser_id')->unsigned();
//            $table->foreign('tuser_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
//            $table->foreign('tuser_id');
            $table->integer('tuser_id');
            $table->Text('message');
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
        Schema::dropIfExists('messages');
    }
}
