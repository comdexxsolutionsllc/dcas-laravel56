<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modules\Support\Entities\TicketLog
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\TicketLog onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\TicketLog withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\TicketLog withoutTrashed()
 * @mixin \Eloquent
 */
class TicketLog extends BaseModel
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'ticket_log';

    /**
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * @var array
     */
    protected $fillable = [
        'ticket_id',
        'user_id',
        'log_content',
    ];
}
