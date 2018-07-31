<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Tags\HasTags;

/**
 * Modules\Support\Entities\Machine
 *
 * @property-read \Modules\Support\Entities\Location                                                     $location
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\MachineLog[]        $machine_log
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\MachineNotes[]      $machine_notes
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\SoftwareInstalled[] $software
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\Machine onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\Machine withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\Machine withoutTrashed()
 * @mixin \Eloquent
 * @property int                                                                                         $id
 * @property int                                                                                         $type_id
 * @property int                                                                                         $user_id
 * @property int|null                                                                                    $location_id
 * @property string                                                                                      $machine_name
 * @property \Carbon\Carbon|null                                                                         $deleted_at
 * @property \Carbon\Carbon|null                                                                         $created_at
 * @property \Carbon\Carbon|null                                                                         $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Machine whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Machine whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Machine whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Machine whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Machine whereMachineName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Machine whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Machine whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Machine whereUserId($value)
 */
class Machine extends BaseModel
{

    use HasTags, SoftDeletes;

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = [
        'type_id',
        'user_id',
        'location_id',
        'machine_name',
    ];

    /**
     * @var array
     */
    protected $seedData = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function machine_log(): HasMany
    {
        return $this->hasMany(MachineLog::class, 'machine_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function software(): HasMany
    {
        return $this->hasMany(SoftwareInstalled::class, 'machine_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function machine_notes(): HasMany
    {
        return $this->hasMany(MachineNotes::class, 'machine_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function location(): HasOne
    {
        return $this->hasOne(Location::class, 'id', 'location_id');
    }

    /**
     * @return array
     */
    protected function getSeedData(): array
    {
        return $this->seedData;
    }
}
