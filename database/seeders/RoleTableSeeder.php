<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id'         => 1,
                'title'      => 'Admin',
                'created_at' => '2020-09-20 12:08:28',
                'updated_at' => '2020-09-20 12:08:28',
            ],
            [
                'id'         => 2,
                'title'      => 'User',
                'created_at' => '2020-09-20 12:08:28',
                'updated_at' => '2020-09-20 12:08:28',
            ],
        ];

        Role::insert($roles);
    }
}
