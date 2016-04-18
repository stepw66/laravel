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

        App\Post::truncate();
        App\User::truncate();

        $this->call(UserTableSeeder::class);
        $this->call(TodoTableSeeder::class);

        Model::reguard();
    }
}
