<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = User::create([
            'name' => 'ADMINISTRADOR',
            'email' => 'admin@admin.com',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('Administrador');

        User::factory(20)->create();
    }
}
