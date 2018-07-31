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
}
