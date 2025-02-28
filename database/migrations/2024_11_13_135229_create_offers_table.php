<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffersTable extends Migration {

	public function up()
	{
		Schema::create('offers', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('image');
			$table->string('name');
			$table->text('description');
			$table->datetime('start_date');
			$table->datetime('end_date');
			$table->integer('restaurant_id');
		});
	}

	public function down()
	{
		Schema::drop('offers');
	}
}