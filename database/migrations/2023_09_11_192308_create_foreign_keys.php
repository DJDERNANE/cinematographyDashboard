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
		Schema::table('films', function(Blueprint $table) {
			$table->foreign('catId')->references('id')->on('categories')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('actors', function(Blueprint $table) {
			$table->foreign('TypeId')->references('id')->on('actor_types')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('galleries', function(Blueprint $table) {
			$table->foreign('filmId')->references('id')->on('films')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('films', function(Blueprint $table) {
			$table->dropForeign('films_catId_foreign');
		});
		Schema::table('actors', function(Blueprint $table) {
			$table->dropForeign('actors_TypeId_foreign');
		});
		Schema::table('galeries', function(Blueprint $table) {
			$table->dropForeign('galleries_filmId_foreign');
		});
	}
};
