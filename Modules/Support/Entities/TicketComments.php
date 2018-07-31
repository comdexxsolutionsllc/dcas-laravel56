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
