<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\User::factory()->create([
             'name' => 'Admin User',
             'email' => 'admin@gmail.com',
             'role' => 'admin',
             'password' => Hash:: make('12345678'),
             'phone' => '1234567890',
         ]);

         //seeder klinik manual
         \App\Models\ProfileClinic::factory()->create([
        'name' => 'Fortuna Klinik',
        'address' => 'Jl. Ahmad Yani',
        'phone' => '08123456789',
        'email' => 'fc@gmail.com',
        'doctor_name' => 'dr. Kurnia',
        'unique_code' => '12345678',
         ]);

         //call
         $this->call(DoctorSeeder::class);
    }
}
