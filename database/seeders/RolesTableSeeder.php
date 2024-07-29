<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = ['admin', 'superadmin', 'seo', 'article_writer'];

        foreach ($roles as $role) {
            Role::create(['name' => $role]);
        }
    }
}
