<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modules\Support\Entities\SoftwareInstalled
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\SoftwareInstalled onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\SoftwareInstalled withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\SoftwareInstalled withoutTrashed()
 * @mixin \Eloquent
 * @property int                 $id
 * @property int                 $software_id
 * @property int                 $machine_id
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\SoftwareInstalled
 *         whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\SoftwareInstalled
 *         whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\SoftwareInstalled whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\SoftwareInstalled
 *         whereMachineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\SoftwareInstalled
 *         whereSoftwareId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\SoftwareInstalled
 *         whereUpdatedAt($value)
 */
class SoftwareInstalled extends BaseModel
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'software_installed';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = [
        'software_id',
        'machine_id',
    ];

    /**
     * @var array
     */
    protected $seedData = [];

    /**
     * @return array
     */
    protected function getSeedData(): array
    {
        return $this->seedData;
    }
}
