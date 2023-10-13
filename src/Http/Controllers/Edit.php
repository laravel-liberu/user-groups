<?php

namespace LaravelLiberu\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\UserGroups\Forms\Builders\UserGroup;
use LaravelLiberu\UserGroups\Models\UserGroup as Model;

class Edit extends Controller
{
    public function __invoke(Model $userGroup, UserGroup $form)
    {
        return ['form' => $form->edit($userGroup)];
    }
}
