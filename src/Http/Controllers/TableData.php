<?php

namespace LaravelLiberu\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Tables\Traits\Data;
use LaravelLiberu\UserGroups\Tables\Builders\UserGroup;

class TableData extends Controller
{
    use Data;

    protected $tableClass = UserGroup::class;
}
