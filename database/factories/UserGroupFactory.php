<?php

namespace LaravelEnso\UserGroups\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelEnso\UserGroups\Models\UserGroup;

class UserGroupFactory extends Factory
{
    protected $model = UserGroup::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->sentence,
        ];
    }
}
