<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('users')->insert([
           'name'   => 'admin',
           'email'  => 'ahmedshuaib46@gmail.com',
           'password'   => Hash::make('admin121')
        ]);
    }
}
