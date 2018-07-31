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
}
