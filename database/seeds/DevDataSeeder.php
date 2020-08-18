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
        $elek = factory(User::class)->create([
            'name' => 'Test Elek',
            'username' => 'testelek',
            'email' => 'test@test1.com',
        ]);
    }
}
