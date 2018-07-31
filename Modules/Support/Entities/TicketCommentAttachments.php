<?php

namespace Modules\Support\Entities;

use App\BaseModel;

/**
 * Modules\Support\Entities\TicketCommentAttachments
 *
 * @mixin \Eloquent
 * @property int                                                                                 $id
 * @property int                                                                                 $comment_id
 * @property string                                                                              $file_name
 * @property \Carbon\Carbon|null                                                                 $created_at
 * @property \Carbon\Carbon|null                                                                 $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketCommentAttachments
 *         whereCommentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketCommentAttachments
 *         whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketCommentAttachments
 *         whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketCommentAttachments
 *         whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketCommentAttachments
 *         whereUpdatedAt($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activity
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
