<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Modules\Support\Entities\TicketStatus
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Ticket[] $tickets
 * @mixin \Eloquent
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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class, 'status_id');
    }
}
