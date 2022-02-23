<?php

namespace LaravelEnso\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\UserGroups\Forms\Builders\UserGroup;

class Create extends Controller
{
    public function __invoke(UserGroup $form)
    {
        return ['form' => $form->create()];
    }
}
