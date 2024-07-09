<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SystemInfo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

     

        User::factory()->create([
            'name' => 'Anil',
            'surname' => 'Dollor',
            'email' => 'admin1@gmail.com',
            'password' => 'admin1@gmail.com',
            'role' => 'admin',

        ]);
        //Elequent ORM method
        SystemInfo::insert([
            [
                'meta_name' => 'app_name',
                'meta_value' => 'Flipkart'
            ],
            [
                'meta_name' => 'app_version',
                'meta_value' => '1.0.0'
            ],
            [
                'meta_name' => 'app_logo',
                'meta_value' => 'https://findvectorlogo.com/wp-content/uploads/2019/03/flipkart-vector-logo.png'
            ]
            
         ]);

    }
}
