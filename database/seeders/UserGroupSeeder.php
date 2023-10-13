<?php

namespace LaravelLiberu\UserGroups\Database\Seeders;

use Illuminate\Database\Seeder;
use LaravelLiberu\Roles\Models\Role;
use LaravelLiberu\UserGroups\Models\UserGroup;

class UserGroupSeeder extends Seeder
{
    public function run()
    {
        UserGroup::factory()->create([
            'name'        => 'Administrators',
            'description' => 'Administrator users group',
        ])->roles()->sync(Role::pluck('id'));
    }
}
