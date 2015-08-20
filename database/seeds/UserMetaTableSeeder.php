<?php

use Illuminate\Database\Seeder;

class UserMetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Usermeta::truncate();
        factory(\App\Usermeta::class, 5)->create();
    }
}
