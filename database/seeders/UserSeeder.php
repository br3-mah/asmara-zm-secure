<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fname' => 'Amsara',
            'lname' => 'Hotel',
            'email' => 'admin@asmarahotelzm.com',
            'password' => bcrypt('Asmara.@2023'),
        ])->assignRole('admin');
    }
}
