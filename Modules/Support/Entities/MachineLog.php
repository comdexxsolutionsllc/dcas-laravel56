<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modules\Support\Entities\MachineLog
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\MachineLog onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\MachineLog withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\MachineLog withoutTrashed()
 * @mixin \Eloquent
 * @property int                                                                                 $id
 * @property int                                                                                 $machine_id
 * @property int                                                                                 $user_id
 * @property string                                                                              $log_content
 * @property \Carbon\Carbon|null                                                                 $deleted_at
 * @property \Carbon\Carbon|null                                                                 $created_at
 * @property \Carbon\Carbon|null                                                                 $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineLog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineLog whereLogContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineLog whereMachineId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\MachineLog whereUserId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activity
 */
class MachineLog extends BaseModel
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'machine_log';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = [
        'machine_id',
        'user_id',
        'log_content',
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
