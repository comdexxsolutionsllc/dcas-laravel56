<?php

namespace Modules\Support\Entities;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategorySubcategory extends Pivot
{

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var bool
     */
    public $timestamps = false;
}
