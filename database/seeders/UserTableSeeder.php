<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
     public function run()
    {
        $user = User::create([
            'user_number' => '23423424',
            'name' => 'Admin User',
            'email' => 'admin@artixcore.com',
            'password' => bcrypt('admin@artixcore.com')
        ]);

        $user->assignRole('admin');

        $user = User::create([
            'user_number' => '234ed23424',
            'name' => 'Super Admin User',
            'email' => 'superadmin@artixcore.com',
            'password' => bcrypt('superadmin@artixcore.com')
        ]);

        $user->assignRole('superadmin');

        $user = User::create([
            'user_number' => '2342nd73424',
            'name' => 'SEO User',
            'email' => 'seo@artixcore.com',
            'password' => bcrypt('seo@artixcore.com')
        ]);

        $user->assignRole('seo');

        $user = User::create([
            'user_number' => '23423lwb7424',
            'name' => 'Article Writer User',
            'email' => 'articlewriter@artixcore.com',
            'password' => bcrypt('articlewriter@artixcore.com')
        ]);

        $user->assignRole('article_writer');
    }
}
