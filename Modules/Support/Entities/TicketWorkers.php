<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modules\Support\Entities\TicketWorkers
 *
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\TicketWorkers onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\TicketWorkers withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\TicketWorkers withoutTrashed()
 * @mixin \Eloquent
 * @property int                 $id
 * @property int                 $ticket_id
 * @property int                 $user_id
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketWorkers whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketWorkers whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketWorkers whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketWorkers whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketWorkers whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketWorkers whereUserId($value)
 */
class TicketWorkers extends BaseModel
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'ticket_workers';

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
    ];
}
