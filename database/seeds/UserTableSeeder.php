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

	    DB::table('users')->insert([
		    [
			    'id'            => 1,
			    'name'      => 'Admin',
			    'email'         => 'admin@gmail.com',
			    'password'      => Hash::make('12345678'),
			    'created_at'    => Carbon::now(),
			    'updated_at'    => Carbon::now()
		    ],

	    ]);
    }
}
