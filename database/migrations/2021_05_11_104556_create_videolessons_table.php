<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideolessonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videolessons', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('patreon', 5)->nullable();
			$table->integer('level');
			$table->integer('udemy')->nullable();
			$table->string('artist', 30);
			$table->string('videoUrl', 20)->nullable();
			$table->string('guitar', 20);
			$table->string('song', 30);
			$table->string('shopUrl', 56)->nullable();
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
		Schema::drop('videolessons');
	}

}
