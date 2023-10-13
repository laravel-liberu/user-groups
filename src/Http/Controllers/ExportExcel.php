<?php

namespace LaravelLiberu\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Tables\Traits\Excel;
use LaravelLiberu\UserGroups\Tables\Builders\UserGroup;

class ExportExcel extends Controller
{
    use Excel;

    protected $tableClass = UserGroup::class;
}
