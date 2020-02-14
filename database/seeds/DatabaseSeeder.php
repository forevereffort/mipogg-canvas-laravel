<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Catherine Goudie',
            'email' => 'info@mipogg.com',
            'password' => bcrypt('mipoggadmin2019'),
            'email_verified_at' => date('Y-m-d H:i:s')
        ]);
    }
}
