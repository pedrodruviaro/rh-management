<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // admin
        DB::table('users')->insert([
            'department_id' => 1,
            'name' => 'Administrador',
            'email' => 'admin@rhmangnt.com',
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt('Aa123456'),
            'role' => 'admin',
            'permissions' => '["admin"]',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // admin details
        DB::table('user_details')->insert([
            'user_id' => 1,
            'address' => 'Rua do Administrador, 123',
            'zip_code' => '1234-123',
            'city' => 'Lisboa',
            'phone' => '900000001',
            'salary' => 8000.00,
            'admission_date' => '2020-01-01',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // admin department (id = 1)
        DB::table('departments')->insert([
            'name' => 'Administração',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
