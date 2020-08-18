<?php

use App\User;
use Illuminate\Database\Seeder;

class DevTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $elek = User::create([
            'name' => 'Test Elek',
            'username' => 'testelek',
            'email' => 'test@test1.com',
        ]);
    }
}
