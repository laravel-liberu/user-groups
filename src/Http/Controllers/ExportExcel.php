<?php

namespace LaravelEnso\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Tables\Traits\Excel;
use LaravelEnso\UserGroups\Tables\Builders\UserGroup;

class ExportExcel extends Controller
{
    use Excel;

    protected $tableClass = UserGroup::class;
}
