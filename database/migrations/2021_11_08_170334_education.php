<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Education extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('content');
            $table->string('tag');
            $table->string('description');
            $table->text('youtube_link')->nullable();
            $table->string('seflink')->unique();
            $table->text('image')->nullable();
            $table->dateTime('finish_date');
            $table->integer('order')->default('99');
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
        //
    }
}
