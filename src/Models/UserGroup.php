<?php

namespace LaravelLiberu\UserGroups\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use LaravelLiberu\Rememberable\Traits\Rememberable;
use LaravelLiberu\Roles\Models\Role;
use LaravelLiberu\Roles\Traits\HasRoles;
use LaravelLiberu\Tables\Traits\TableCache;
use LaravelLiberu\UserGroups\Enums\UserGroups;
use LaravelLiberu\UserGroups\Exceptions\Conflict;
use LaravelLiberu\Users\Models\User;

class UserGroup extends Model
{
    use HasFactory;
    use HasRoles;
    use Rememberable;
    use TableCache;

    protected $guarded = ['id'];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function users()
    {
        return $this->hasMany(User::class, 'group_id');
    }

    public function delete()
    {
        if ($this->users()->exists()) {
            throw Conflict::hasUsers();
        }

        $this->roles()->detach();

        parent::delete();
    }

    public function scopeVisible(Builder $query): Builder
    {
        $isSuperior = Auth::user()->belongsToAdminGroup();

        return $query->when(! $isSuperior, fn ($query) => $query->when(
            Config::get('liberu.user-groups.restrictedToOwnGroup'),
            fn ($query) => $query->whereId(Auth::user()->group_id),
            fn ($query) => $query->where('id', '<>', UserGroups::Admin),
        ));
    }
}
