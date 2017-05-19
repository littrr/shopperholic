<?php

namespace Shopperholic\Entities;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * @var array
     */
    public $fillable = ['name', 'slug', 'user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @param $name
     */
    public function setSlugAttribute($name)
    {
        $this->attributes['slug'] = str_slug($name);
    }
}
