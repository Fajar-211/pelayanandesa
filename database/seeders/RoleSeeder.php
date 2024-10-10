<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'warga']);
        $role = Role::create(['name' => 'admin']);

        // $wargapermissions = [
        //     'view surat pengantar',
        //     'view wajib lapor',
        //     'view kas warga',
        // ];
        // $adminpermissions = [
        //     'view surat pengantar',
        //     'view wajib lapor',
        //     'view kas warga',
        //     'view data warga',
        //     'view pemberitahuan',
        // ];

        // foreach ($permissions as $permission) {
        //     Permission::create(['name' => $permission]);
        // }
        // $adminRole->givePermissionTo($adminpermissions);
        // $wargaRole->givePermissionTo($wargapermissions);
    }
}
