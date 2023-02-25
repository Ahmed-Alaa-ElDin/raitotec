<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Ahmed Alaa El-Din',
            'password' => Hash::make('6F-BDLLPnzsu!Ay'),
            'email' => 'ph_ahmedalaa@azhar.edu.eg',
            'address' => '123 Main Street'
        ]);

        User::create([
            'name' => 'Admin',
            'password' => Hash::make('Admin'),
            'email' => 'admin@raitotec.com',
            'address' => '123 Main Street'
        ]);

        User::factory(10)->create();
    }
}
