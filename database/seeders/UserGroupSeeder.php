<?php

namespace LaravelEnso\UserGroups\Database\Seeders;

use Illuminate\Database\Seeder;
use LaravelEnso\Roles\Models\Role;
use LaravelEnso\UserGroups\Models\UserGroup;

class UserGroupSeeder extends Seeder
{
    public function run()
    {
        UserGroup::factory()->create([
            'name' => 'Administrators',
            'description' => 'Administrator users group',
        ])->roles()->sync(Role::pluck('id'));
    }
}
