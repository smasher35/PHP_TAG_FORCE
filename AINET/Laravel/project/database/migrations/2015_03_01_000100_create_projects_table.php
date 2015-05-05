<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('name');
			$table->string('acronym')->nullable();

			$table->text('description');
			$table->string('type')->nullable();
			$table->string('theme')->nullable();
			$table->text('keywords')->nullable();

			$table->date('started_at');
			$table->date('finished_at')->nullable();

			$table->integer('created_by')->unsigned();
			$table->foreign('created_by')->references('id')->on('users');

			$table->integer('updated_by')->unsigned();
			$table->foreign('updated_by')->references('id')->on('users');

			$table->integer('approved_by')->unsigned();
			$table->foreign('approved_by')->references('id')->on('users');

			$table->text('used_software')->nullable();
			$table->text('used_hardware')->nullable();
			$table->text('observations');
			$table->date('featured_until');

			$table->integer('replaces_id')->unsigned()->nullable(); // edited version of a comment
			$table->foreign('replaces_id')->references('id')->on('projects');
			
			$table->integer('state')->unsigned();

			$table->softDeletes();
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
		// Schema::table('projects', function(Blueprint $table)
		// {
		// 	$table->dropForeign('projects_created_by_foreign');
		// 	$table->dropForeign('projects_approved_byy_foreign');
		// });
		Schema::drop('projects');
	}

}
