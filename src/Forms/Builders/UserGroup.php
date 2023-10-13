<?php

namespace LaravelLiberu\UserGroups\Forms\Builders;

use LaravelLiberu\Forms\Services\Form;
use LaravelLiberu\UserGroups\Models\UserGroup as Model;

class UserGroup
{
    private const TemplatePath = __DIR__.'/../Templates/userGroup.json';

    protected Form $form;

    public function __construct()
    {
        $this->form = (new Form($this->templatePath()));
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Model $userGroup)
    {
        return $this->form->edit($userGroup);
    }

    protected function templatePath(): string
    {
        return self::TemplatePath;
    }
}
