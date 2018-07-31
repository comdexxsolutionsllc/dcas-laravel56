<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

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
 */
class Machine extends BaseModel
{

    use SoftDeletes;

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
}
