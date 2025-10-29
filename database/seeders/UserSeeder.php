<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
           [ 
            'name' => 'Alessadro R. Da Silva',
            'email' => 'alessandrozinco@gmail.com',
            'password' => bcrypt('senha123'),
           ],
           


        );
        User::factory(50)->create();

    }
}
