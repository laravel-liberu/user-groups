<?php

namespace LaravelEnso\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Tables\Traits\Data;
use LaravelEnso\UserGroups\Tables\Builders\UserGroup;

class TableData extends Controller
{
    use Data;

    protected $tableClass = UserGroup::class;
}
