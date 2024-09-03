<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SystemInfo;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash; // Import the Hash facade

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
                'name' => 'admin1',
                'surname' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => Hash::make('admin1@gmail.com'), // Hashing the password
                'role' => 'admin',
            ],
            [
                'name' => 'customer1',
                'surname' => 'customer1',
                'email' => 'customer1@gmail.com',
                'password' => Hash::make('customer1@gmail.com'), // Hashing the password
                'role' => 'customer',
            ],
            [
                'name' => 'customercare1',
                'surname' => 'customercare1',
                'email' => 'customercare1@gmail.com',
                'password' => Hash::make('customercare1@gmail.com'),
                'role' => 'customercare',
            ],
            [
                'name' => 'Rajveer',
                'surname' => 'Singh',
                'email' => 'customer3@gmail.com',
                'password' => Hash::make('customer3@gmail.com'),
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
                'meta_name' => 'app_description',
                'meta_value' => 'Flipkart Description'
            ],
            [
                'meta_name' => 'app_logo',
                'meta_value' => 'asdfaks'
            ],
            [
                'meta_name' => 'app_shortcut_icon_url',
                'meta_value' => 'Flipkart Description'
            ],
            [
                'meta_name' => 'customer_care_no1',
                'meta_value' => '11111111111111'
            ],
            [
                'meta_name' => 'customer_care_no2',
                'meta_value' => '222222222222222'
            ],
            [
                'meta_name' => 'customer_care_no3',
                'meta_value' => '3333333333333'
            ],
            [
                'meta_name' => 'store_contact_info',
                'meta_value' => 'kalsfdlajlks'
            ],
            [
                'meta_name' => 'support_email_addr',
                'meta_value' => 'kalsfdlajlks'
            ],
            [
                'meta_name' => 'social_fb_url',
                'meta_value' => 'kalsfdlajlks'
            ],
            [
                'meta_name' => 'social_google_url',
                'meta_value' => 'kalsfdlajlks'
            ],
            [
                'meta_name' => 'social_x_url',
                'meta_value' => 'kalsfdlajlks'
            ],
            [
                'meta_name' => 'social_github_url',
                'meta_value' => 'kalsfdlajlks'
            ],
            
         ]);

    }
}
