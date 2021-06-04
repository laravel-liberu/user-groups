<?php

namespace LaravelEnso\UserGroups\Forms\Builders;

use LaravelEnso\Forms\Services\Form;
use LaravelEnso\UserGroups\Models\UserGroup;

class UserGroupForm
{
    protected const TemplatePath = __DIR__.'/../Templates/userGroup.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = (new Form(self::TemplatePath));
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(UserGroup $userGroup)
    {
        return $this->form->edit($userGroup);
    }
}
