<?php

use App\User;
use Illuminate\Database\Seeder;

class DevDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create two user
        //then first follows the second
        //then both tweets something

        $elek = factory(User::class)->create([
            'name' => 'Test Elek',
            'username' => 'testelek',
            'email' => 'test@test1.com',
        ]);

        $newUser = factory(User::class)->create();

        $elek->follow($newUser);

        factory('App\Tweet')->create(['user_id'=>$elek->id]);
        factory('App\Tweet')->create(['user_id'=>$newUser->id]);
    }
}
