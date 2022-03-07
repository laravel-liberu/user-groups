<?php

namespace LaravelEnso\UserGroups\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use LaravelEnso\Rememberable\Traits\Rememberable;
use LaravelEnso\Roles\Models\Role;
use LaravelEnso\Roles\Traits\HasRoles;
use LaravelEnso\Tables\Traits\TableCache;
use LaravelEnso\UserGroups\Enums\UserGroups;
use LaravelEnso\UserGroups\Exceptions\Conflict;
use LaravelEnso\Users\Models\User;

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
            Config::get('enso.user-groups.restrictedToOwnGroup'),
            fn ($query) => $query->whereId(Auth::user()->group_id),
            fn ($query) => $query->where('id', '<>', UserGroups::Admin),
        ));
    }
}
