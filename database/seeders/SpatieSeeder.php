<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SpatieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'admin']);

        Permission::create(['name' => 'View']);
        Permission::create(['name' => 'Create']);
        Permission::create(['name' => 'Update']);
        Permission::create(['name' => 'Delete']);

        $role->givePermissionTo('View','Create','Update','Delete');
    }
}
