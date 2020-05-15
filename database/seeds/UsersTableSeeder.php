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
        App\User::create([

            'name' => 'Enderson Marin',
            'email' => 'auxsistemas@hercas.net',
            'password' => bcrypt('4080'),
            'remember_token' => 'hercaspublicidad'
        ]);

        $users = factory(App\User::class, 29)->create();
    }
}
