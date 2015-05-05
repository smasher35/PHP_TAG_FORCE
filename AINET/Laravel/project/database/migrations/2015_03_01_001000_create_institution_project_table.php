<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstitutionProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('institution_project', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('institution_id')->unsigned();
			$table->foreign('institution_id')->references('id')->on('institutions');

			$table->integer('project_id')->unsigned();
			$table->foreign('project_id')->references('id')->on('projects');

			$table->unique(['institution_id','project_id']);

			// no state column because this relation is approved with the project

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
		Schema::drop('institution_project');
	}

}
