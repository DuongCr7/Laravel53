<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $limit = 10;

	    for ($i = 0; $i < $limit; $i++) {
		    factory(App\Entities\User::class)->create();
	    }
    }
}
