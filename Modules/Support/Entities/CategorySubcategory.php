<?php

namespace Modules\Support\Entities;

use Illuminate\Database\Eloquent\Relations\Pivot;

class CategorySubcategory extends Pivot
{

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $guarded = [];
}
