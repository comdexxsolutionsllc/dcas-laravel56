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
 * @property int                                                                               $id
 * @property string                                                                            $type_name
 * @property \Carbon\Carbon|null                                                               $deleted_at
 * @property \Carbon\Carbon|null                                                               $created_at
 * @property \Carbon\Carbon|null                                                               $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineType whereTypeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineType whereUpdatedAt($value)
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
     * @var array
     */
    protected $seedData = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function machine(): HasMany
    {
        return $this->hasMany(Machine::class, 'type_id');
    }

    /**
     * @return array
     */
    protected function getSeedData(): array
    {
        return $this->seedData;
    }
}
