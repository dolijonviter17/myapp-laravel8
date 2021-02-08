<?php

namespace Database\Seeders;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminPermissions = Permission::all();
        Role::findOrFail(1)->permissions()->sync($adminPermissions->pluck('id'));
        $userPermissions = $adminPermissions->filter(function ($permission){
            return substr($permission->title, 0, 5) != 'user_' && 
            substr($permission->title, 0, 5) != 'role_'
             && substr($permission->title, 0, 11) != 'permission_';
        });
        Role::findOrFail(2)->permissions()->sync($userPermissions);

    }
}
