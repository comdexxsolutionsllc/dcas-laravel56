<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modules\Support\Entities\SoftwareCategory
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Software[] $software
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\SoftwareCategory onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\SoftwareCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\SoftwareCategory withoutTrashed()
 * @mixin \Eloquent
 */
class SoftwareCategory extends BaseModel
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'software_category';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = [
        'category_name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function software(): HasMany
    {
        return $this->hasMany(Software::class, 'category_id');
    }
}
