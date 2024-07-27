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
        User::insert([
            [
                'name' => 'Anil',
                'surname' => 'Dollor',
                'email' => 'admin1@gmail.com',
                'password' => 'admin1@gmail.com',
                'role' => 'admin',
            ],
            [
                'name' => 'Anil',
                'surname' => 'Sharma',
                'email' => 'customer1@gmail.com',
                'password' => 'customer1@gmail.com',
                'role' => 'customer',
            ],
            [
                'name' => 'Abhishek',
                'surname' => 'Bairagi',
                'email' => 'customer2@gmail.com',
                'password' => 'customer2@gmail.com',
                'role' => 'customer',
            ],
            [
                'name' => 'Rajveer',
                'surname' => 'Singh',
                'email' => 'customer3@gmail.com',
                'password' => 'customer3@gmail.com',
                'role' => 'customer',
            ]
            

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
