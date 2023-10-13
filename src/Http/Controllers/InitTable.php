<?php

namespace LaravelLiberu\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Tables\Traits\Init;
use LaravelLiberu\UserGroups\Tables\Builders\UserGroup;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = UserGroup::class;
}
