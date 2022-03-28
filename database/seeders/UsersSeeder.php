<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Leonardo Ferreira',
            'email' => 'leonardo@com.br',
            'password' => bcrypt('1234'),
        ]);
    }
}
