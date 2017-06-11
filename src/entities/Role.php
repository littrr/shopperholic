<?php

namespace Shopperholic\Entities;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Laratrust\LaratrustRole;

class Role extends LaratrustRole
{
    /**
     * App owner role
     */
    const APP_OWNER = 'app-owner';

    /**
     * Account owner role
     */
    const ACCOUNT_OWNER = 'account-owner';

    /**
     * @var array
     */
    public $fillable = ['name', 'display_name', 'description', 'user_id', 'userable_id', 'userable_type'];

    /**
     * @return string
     */
    public function getRouteKeyName(): string
    {
        return 'name';
    }

    /**
     * @return MorphTo
     */
    public function userable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Sluggify the name field
     *
     * @param string $displayName
     */
    public function setNameAttribute(string $displayName)
    {
        $this->attributes['name'] = str_slug($displayName);
    }

    /**
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
