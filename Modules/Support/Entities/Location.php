<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

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
 * @property int                                                                               $id
 * @property int|null                                                                          $group_id
 * @property string                                                                            $location_name
 * @property string|null                                                                       $location_description
 * @property string|null                                                                       $deleted_at
 * @property \Carbon\Carbon|null                                                               $created_at
 * @property \Carbon\Carbon|null                                                               $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Location whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Location whereGroupId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Location
 *         whereLocationDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Location whereLocationName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Location whereUpdatedAt($value)
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Tags\Tag[]                       $tags
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Location withAllTags($tags, $type =
 *         null)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Location withAnyTags($tags, $type =
 *         null)
 */
class Location extends BaseModel
{

    use HasTags, SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'group_id',
        'location_name',
        'location_description',
    ];

    /**
     * @var array
     */
    protected $seedData = [];

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

    /**
     * @return array
     */
    protected function getSeedData(): array
    {
        return $this->seedData;
    }
}
