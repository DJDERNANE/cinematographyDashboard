<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->string('auther');
            $table->string('senareo');
            $table->string('filmer');
            $table->string('product');
            $table->string('prod');
            $table->string('date');
            $table->string('duree');
			$table->string('size');
            $table->string('desc');
			$table->string('picture');
			$table->string('cretical')->default('');
			$table->bigInteger('catId')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
};
