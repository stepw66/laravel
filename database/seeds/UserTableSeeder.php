<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create()->each(function($user){
            for($i=0; $i<=10; $i++){
                $user->posts()->save(factory(App\Post::class)->make([
                    'user_id'       => $user->id,
                ]));
            }

            $user->phone()->save(factory(App\Phone::class)->make([
                'user_id'       => $user->id,
            ]));

        });
    }
}
