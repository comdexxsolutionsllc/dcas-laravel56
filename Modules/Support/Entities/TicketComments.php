<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Modules\Support\Entities\TicketComments
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\TicketCommentAttachments[]
 *                $attachments
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\TicketComments onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\TicketComments withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Modules\Support\Entities\TicketComments withoutTrashed()
 * @mixin \Eloquent
 * @property int                 $id
 * @property int                 $ticket_id
 * @property int                 $user_id
 * @property string              $comment_content
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketComments
 *         whereCommentContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketComments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketComments whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketComments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketComments whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketComments whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\TicketComments whereUserId($value)
 */
class TicketComments extends BaseModel
{

    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'ticket_comments';

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
        'comment_content',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attachments(): HasMany
    {
        return $this->hasMany(TicketCommentAttachments::class, 'comment_id');
    }
}
