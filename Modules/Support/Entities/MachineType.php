<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modules\Support\Entities\MachineType
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Machine[] $machine
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\MachineType onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\MachineType withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\MachineType withoutTrashed()
 * @mixin \Eloquent
 */
class MachineType extends BaseModel
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'machine_types';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = [
        'type_name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function machine(): HasMany
    {
        return $this->hasMany(Machine::class, 'type_id');
    }
}
