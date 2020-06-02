<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateActivitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('activities', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 100)->unique('name_UNIQUE');
		});

		$data = [
				[
						'name' => 'Log in',
				],
				[
						'name' => 'Log out',
				],
				[
						'name' => 'Member home',
				],
				[
						'name' => 'Partner program',
				],
				[
						'name' => 'Account settings',
				],
				[
						'name' => 'News room',
				],
				[
						'name' => 'Realizes projects / Recreational new development project',
				],
				[
						'name' => 'Realizes projects',
				],
				[
						'name' => 'Member area contact page',
				],
				[
						'name' => 'Marketing materials',
				],
				[
						'name' => 'Your sign ups',
				],
				[
						'name' => 'HTML banners',
				],
				[
						'name' => 'Facebook banners',
				],
				[
						'name' => 'Realized projects / Renovation project house 1',
				],
				[
						'name' => 'Realized projects / Renovation project house 3',
				],
				[
						'name' => 'Realized projects / Renovation project house 2',
				],
				[
						'name' => 'Projects / First-line lake development project',
				],

		];

		DB::table('activities')->insert($data);


	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('activities');
	}

}
