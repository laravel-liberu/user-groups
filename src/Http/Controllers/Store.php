<?php

namespace LaravelEnso\UserGroups\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\UserGroups\Http\Requests\ValidateUserGroupRequest;
use LaravelEnso\UserGroups\Models\UserGroup;

class Store extends Controller
{
    public function __invoke(ValidateUserGroupRequest $request, UserGroup $userGroup)
    {
        $userGroup = $userGroup->storeWithRoles(
            $request->validatedExcept('roles'),
            $request->get('roles')
        );

        return [
            'message' => __('The user group was successfully created'),
            'redirect' => 'administration.userGroups.edit',
            'param' => ['userGroup' => $userGroup->id],
        ];
    }
}
