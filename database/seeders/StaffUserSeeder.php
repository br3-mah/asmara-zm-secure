<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // peace2u2.@123 on localhost
        User::create([
            'fname' => 'Front',
            'lname' => 'Desk',
            'email' => 'frontoffice@asmarahotelzm.com',
            'password' => bcrypt('frontoffice.@123'),
        ])->assignRole('staff');
    }
}
