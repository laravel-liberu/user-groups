<?php

namespace LaravelLiberu\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Select\Traits\OptionsBuilder;
use LaravelLiberu\UserGroups\Models\UserGroup;

class Options extends Controller
{
    use OptionsBuilder;

    public function query()
    {
        return UserGroup::visible();
    }
}
