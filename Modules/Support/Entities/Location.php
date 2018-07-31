<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modules\Support\Entities\Location
 *
 * @property-read \Modules\Support\Entities\LocationGroup                                      $group
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Machine[] $machines
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\Location onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\Location withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\Location withoutTrashed()
 * @mixin \Eloquent
 */
class Location extends BaseModel
{

    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'group_id',
        'location_name',
        'location_description',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function group(): HasOne
    {
        return $this->hasOne(LocationGroup::class, 'id', 'group_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function machines(): HasMany
    {
        return $this->hasMany(Machine::class, 'location_id', 'id');
    }
}
