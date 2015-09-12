<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Jonas Lomholdt",
            'email' => "jonaslomholdt@gmail.com",
            'company_id' => "1",
            'password' => bcrypt('28608374'),
        ]);
    }
}
