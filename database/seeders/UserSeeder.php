<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ustadz = User::factory()->create([
            'name' => 'ustadz',
            'email' => 'ustadz@gmail.com',
            'password' => bcrypt('12345678'),
            'akses' => 'ustadz',
        ]);
        $ustadz->assignRole('ustadz');
    }
}
