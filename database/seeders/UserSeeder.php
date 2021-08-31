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
        $user = User::create([
            'name'=>'Jhonatan Vasquez Enrique',
            'email'=>'jvasquezenrique@gmail.com',
            'password'=>bcrypt('12345678')
        ]);

        $user->assignRole('admin');

        User::factory(40)->create();
    }
}
