<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modules\Support\Entities\LocationGroup
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Location[] $locations
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\LocationGroup onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\LocationGroup withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\LocationGroup withoutTrashed()
 * @mixin \Eloquent
 * @property int                                                                                $id
 * @property string                                                                             $group_name
 * @property string|null                                                                        $group_description
 * @property \Carbon\Carbon|null                                                                $deleted_at
 * @property \Carbon\Carbon|null                                                                $created_at
 * @property \Carbon\Carbon|null                                                                $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\LocationGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\LocationGroup whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\LocationGroup
 *         whereGroupDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\LocationGroup whereGroupName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\LocationGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\LocationGroup whereUpdatedAt($value)
 */
class LocationGroup extends BaseModel
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'location_groups';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = [
        'group_name',
        'group_description',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function locations(): HasMany
    {
        return $this->hasMany(Location::class, 'group_id', 'id');
    }
}
