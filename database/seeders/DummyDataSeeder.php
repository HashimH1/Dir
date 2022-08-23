<?php

namespace Database\Seeders;

use App\Models\about;
use App\Models\project;
use App\Models\setting;
use App\Models\news;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $owner = Role::create([

            'name' => 'super_admin',
            'display_name' => 'Project Owner', // optional
            'description' => 'User is the owner of a given project', // optional

          ]);

          $owner = Role::create([

            'name' => 'admin',
            'display_name' => 'Project Owner', // optional
            'description' => 'User is the owner of a given project', // optional

          ]);





    }
}
