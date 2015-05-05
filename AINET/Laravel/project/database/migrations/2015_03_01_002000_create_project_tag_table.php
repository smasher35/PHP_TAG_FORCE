<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_tag', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('project_id')->unsigned();
			$table->foreign('project_id')->references('id')->on('projects');
			
			$table->integer('tag_id')->unsigned();
			$table->foreign('tag_id')->references('id')->on('tags');
			
			$table->unique(['project_id','tag_id']);
			
			$table->integer('state');
				
			$table->integer('added_by')->unsigned();
			$table->foreign('added_by')->references('id')->on('users');
			
			$table->integer('approved_by')->unsigned()->nullable();
			$table->foreign('approved_by')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_tag');
	}

}
