<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name');
			$table->string('email')->unique();
			$table->string('alt_email')->nullable()->unique();

			$table->string('password', 255);

			$table->integer('institution_id')->unsigned();
			$table->foreign('institution_id')->references('id')->on('institutions');

			$table->string('position');

			$table->integer('photo_url')->nullable();
			$table->string('profile_url')->nullable();

			$table->smallInteger('flags');
			$table->integer('role')->unsigned(); // 1 = Author, 2 = Edit, 4 = Admin

			$table->rememberToken();
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
		// Schema::table('users', function(Blueprint $table)
		// {
		// 	$table->dropForeign('users_institution_id_foreign');
		// });
		Schema::drop('users');
	}

}
