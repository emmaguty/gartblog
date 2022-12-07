<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Emmanuel98',
            'email' => 'gartmon@gmail.com',
            'password' => bcrypt('hormiga12')
        ]);

        User::factory(99)->create();
    }
}
