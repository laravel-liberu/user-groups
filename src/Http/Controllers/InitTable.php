<?php

namespace LaravelEnso\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Tables\Traits\Init;
use LaravelEnso\UserGroups\Tables\Builders\UserGroup;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = UserGroup::class;
}
