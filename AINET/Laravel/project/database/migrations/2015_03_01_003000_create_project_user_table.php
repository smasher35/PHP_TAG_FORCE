<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_user', function(Blueprint $table)
		{
			$table->increments('id');
			
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');
			
			$table->integer('project_id')->unsigned();
			$table->foreign('project_id')->references('id')->on('projects');
			
			$table->smallInteger('position')->unsigned(); // 0 = Author/Team Member, 1 = Responsible Person
			
			$table->timestamps();

			$table->unique(['user_id','project_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_user');
	}

}
