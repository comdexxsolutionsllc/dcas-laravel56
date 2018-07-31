<?php

namespace Modules\Support\Entities;

use App\BaseModel;

/**
 * Modules\Support\Entities\TicketAttachments
 *
 * @mixin \Eloquent
 * @property int                 $id
 * @property int                 $ticket_id
 * @property string              $file_name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketAttachments
 *         whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketAttachments
 *         whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketAttachments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketAttachments
 *         whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketAttachments
 *         whereUpdatedAt($value)
 */
class TicketAttachments extends BaseModel
{

    /**
     * @var string
     */
    protected $table = 'ticket_attachments';

    /**
     * @var array
     */
    protected $fillable = [
        'ticket_id',
        'file_name',
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
