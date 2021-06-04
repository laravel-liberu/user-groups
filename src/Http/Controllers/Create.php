<?php

namespace LaravelEnso\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\UserGroups\Forms\Builders\UserGroupForm;

class Create extends Controller
{
    public function __invoke(UserGroupForm $form)
    {
        return ['form' => $form->create()];
    }
}
