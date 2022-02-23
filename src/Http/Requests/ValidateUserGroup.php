<?php

namespace LaravelEnso\UserGroups\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use LaravelEnso\Helpers\Traits\FiltersRequest;

class ValidateUserGroup extends FormRequest
{
    use FiltersRequest;

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => ['required', $this->nameUnique()],
            'description' => 'nullable',
            'roles' => 'array',
        ];
    }

    protected function nameUnique()
    {
        return Rule::unique('user_groups', 'name')
            ->ignore($this->route('userGroup')?->id);
    }
}
