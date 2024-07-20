<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'ustadz', 'guard_name' => 'web'],
            ['name' => 'guru', 'guard_name' => 'web'],
            ['name' => 'tutor', 'guard_name' => 'web'],
            ['name' => 'karyawan', 'guard_name' => 'web'],
            ['name' => 'konselor', 'guard_name' => 'web'],
            ['name' => 'pustakawan', 'guard_name' => 'web'],
            ['name' => 'paramedis', 'guard_name' => 'web'],
            ['name' => 'keamanan', 'guard_name' => 'web'],
            ['name' => 'petugas_piket', 'guard_name' => 'web'],
            ['name' => 'ulama', 'guard_name' => 'web'],
            ['name' => 'wali', 'guard_name' => 'web'],
            ['name' => 'alumni', 'guard_name' => 'web'],
            ['name' => 'petugas_laundry', 'guard_name' => 'web'],
            ['name' => 'petugas_supir_antar_jemput', 'guard_name' => 'web'],
            ['name' => 'petugas_catering', 'guard_name' => 'web'],
        ];

        // foreach ($roles as $role) {
        //     Role::create($role);
        // }
        foreach ($roles as $roleData) {
            Role::firstOrCreate($roleData);
        }
        
        // Buat user dan assign role
        foreach ($roles as $roleData) {
            $roleName = $roleData['name'];
            
            $user = User::factory()->create([
                'name' => $roleName,
                'email' => $roleName . '@gmail.com',
                'password' => bcrypt('12345678'),
            ]);
            
            $user->assignRole($roleName);
        }
    }
}
