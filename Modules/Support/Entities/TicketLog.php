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
 * @property int                 $id
 * @property int                 $ticket_id
 * @property int                 $user_id
 * @property string              $log_content
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketLog whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketLog whereLogContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketLog whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketLog whereUserId($value)
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
