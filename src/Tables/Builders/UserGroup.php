<?php

namespace LaravelLiberu\UserGroups\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Tables\Contracts\Table;
use LaravelLiberu\UserGroups\Models\UserGroup as Model;

class UserGroup implements Table
{
    private const TemplatePath = __DIR__.'/../Templates/userGroups.json';

    public function query(): Builder
    {
        return Model::selectRaw('id, name, description, created_at');
    }

    public function templatePath(): string
    {
        return self::TemplatePath;
    }
}
