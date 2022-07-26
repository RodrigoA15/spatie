<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'rodrigo andres',
            'email' => 'rodrigo@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole('administrador');

       

            User::factory(9)->create(); 
    }
}
