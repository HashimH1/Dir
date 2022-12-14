<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=   User::create([

            'name' => 'Super admin',
            'email' => 'super_admin@final.com',
            'password' => Hash::make('finalTouch@#'),
        ]);

        $user->attachRole(1);
    }
}
