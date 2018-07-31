<?php

namespace Modules\Support\Entities;

use App\BaseModel;

/**
 * Modules\Support\Entities\TicketAttachments
 *
 * @mixin \Eloquent
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
}
