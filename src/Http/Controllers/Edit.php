<?php

namespace LaravelEnso\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\UserGroups\Forms\Builders\UserGroup;
use LaravelEnso\UserGroups\Models\UserGroup as Model;

class Edit extends Controller
{
    public function __invoke(Model $userGroup, UserGroup $form)
    {
        return ['form' => $form->edit($userGroup)];
    }
}
