<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        App\User::truncate();
        App\Post::truncate();
        App\Phone::truncate();

        $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
