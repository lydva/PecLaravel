<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('author')->unsigned();
            $table->date('publishingDate');
            $table->longText('content');
            $table->bigInteger('category')->unsigned();
            $table->timestamps();
        });

        Schema::table('news', function($table) {
            $table->foreign('author')->references('id')->on('author');
            $table->foreign('category')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
