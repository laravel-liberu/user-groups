<?php

namespace LaravelEnso\UserGroups\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\Contracts\Table;
use LaravelEnso\UserGroups\Models\UserGroup;

class UserGroupTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/userGroups.json';

    public function query(): Builder
    {
        return UserGroup::selectRaw('id, name, description, created_at');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
