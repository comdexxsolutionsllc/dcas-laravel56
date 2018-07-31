<?php

namespace Modules\Support\Entities;

use App\BaseModel;

/**
 * Modules\Support\Entities\TicketCommentAttachments
 *
 * @mixin \Eloquent
 */
class TicketCommentAttachments extends BaseModel
{

    /**
     * @var string
     */
    protected $table = 'ticket_comment_attachments';

    /**
     * @var array
     */
    protected $fillable = [
        'comment_id',
        'file_name',
    ];
}
