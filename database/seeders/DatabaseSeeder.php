<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run()
	{
		// $this->call('UsersTableSeeder');
		Post::factory(10)->create();
	}
}
