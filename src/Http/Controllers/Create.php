<?php

namespace LaravelLiberu\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\UserGroups\Forms\Builders\UserGroup;

class Create extends Controller
{
    public function __invoke(UserGroup $form)
    {
        return ['form' => $form->create()];
    }
}
