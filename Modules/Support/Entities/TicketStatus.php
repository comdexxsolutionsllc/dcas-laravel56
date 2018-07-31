<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Modules\Support\Entities\TicketStatus
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Ticket[]    $tickets
 * @mixin \Eloquent
 * @property int                                                                                 $id
 * @property string                                                                              $status_name
 * @property string                                                                              $status_color
 * @property \Carbon\Carbon|null                                                                 $created_at
 * @property \Carbon\Carbon|null                                                                 $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketStatus whereStatusColor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketStatus whereStatusName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketStatus whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activity
 */
class TicketStatus extends BaseModel
{

    /**
     * @var string
     */
    protected $table = 'ticket_status';

    /**
     * @var array
     */
    protected $fillable = [
        'status_name',
        'status_color',
    ];

    /**
     * @var array
     */
    protected $seedData = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'status_id');
    }

    /**
     * @return array
     */
    protected function getSeedData(): array
    {
        return $this->seedData;
    }
}
