<?php

namespace Shopperholic\Entities;

use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'contact_number', 'userable_id', 'userable_type', 'user_id'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @param string $password
     */
    public function setPasswordAttribute(string $password)
    {
        $this->attributes['password'] = Hash::needsRehash($password) ? Hash::make($password) : $password;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(self::class, 'user_id');
    }

    /**
     * Local scope to retrieve application owner
     *
     * @param Builder $query
     * @return Builder
     */
    public function scopeAppOwner(Builder $query): Builder
    {
        return $query->where('is_app_owner', 1);
    }

    /**
     * Polymorphic relation
     *
     * @return MorphTo
     */
    public function userable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Returns true if the user is an app owner
     *
     * @return bool
     */
    public function isAppOwner()
    {
        return boolval($this->is_app_owner);
    }

    /**
     * Returns true if the user is an account owner
     *
     * @return bool
     */
    public function isAccountOwner()
    {
        return boolval($this->is_account_owner);
    }
}
