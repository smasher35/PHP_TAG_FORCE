<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('comments', function(Blueprint $table)
		{
			$table->increments('id');

			$table->text('comment');

			$table->integer('project_id')->unsigned();
			$table->foreign('project_id')->references('id')->on('projects');

			$table->string('user_name')->nullable(); // optional name for anonymous comments

			$table->integer('user_id')->unsigned()->nullable();	// if null, user is anonymous
			$table->foreign('user_id')->references('id')->on('users');
			
			$table->integer('approved_by')->unsigned()->nullable();
			$table->foreign('approved_by')->references('id')->on('users');
		
			$table->integer('replaces_id')->unsigned()->nullable(); // edited version of a comment
			$table->foreign('replaces_id')->references('id')->on('comments');

			$table->integer('state')->unsigned();
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
		Schema::table('comments', function(Blueprint $table)
		{
			$table->dropForeign('comments_user_id_foreign');
			$table->dropForeign('comments_project_id_foreign');
			$table->dropForeign('comments_approved_by_foreign');
		});
		Schema::drop('comments');
	}

}
