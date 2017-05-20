<?php

namespace Shopperholic\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    /**
     * Model table
     *
     * @var string
     */
    public $table = 'product_categories';

    /**
     * @var array
     */
    public $fillable = ['name', 'slug', 'description', 'parent_id', 'user_id'];

    /**
     * Category's parent category
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function parentCategory()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    /**
     * Category's sub categories
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subCategories()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
