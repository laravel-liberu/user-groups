<?php

namespace LaravelEnso\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Tables\Traits\Data;
use LaravelEnso\UserGroups\Tables\Builders\UserGroupTable;

class TableData extends Controller
{
    use Data;

    protected $tableClass = UserGroupTable::class;
}
