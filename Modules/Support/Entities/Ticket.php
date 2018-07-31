<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use App\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Modules\Support\Entities\Ticket
 *
 * @property int                                                                                         $id
 * @property int                                                                                         $user_id
 * @property int                                                                                         $category_id
 * @property string                                                                                      $ticket_id
 * @property string                                                                                      $title
 * @property string                                                                                      $priority
 * @property string                                                                                      $message
 * @property string                                                                                      $status
 * @property \Carbon\Carbon|null                                                                         $created_at
 * @property \Carbon\Carbon|null                                                                         $updated_at
 * @property-read \Modules\Support\Entities\Category                                                     $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Comment[]           $comments
 * @property-read \App\User                                                                              $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Ticket whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Ticket whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Ticket whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Ticket whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Ticket wherePriority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Ticket whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Ticket whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Ticket whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Ticket whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Ticket whereUserId($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\TicketAttachments[] $attachments
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\TicketLog[]         $log
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\TicketWorkers[]     $workers
 */
class Ticket extends BaseModel
{

    /**
     * @var array
     */
    protected $fillable = [
        'user_id',
        'category_id',
        'ticket_id',
        'title',
        'priority',
        'message',
        'status',
    ];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['comments'];

    /**
     * Is ticket closed?
     *
     * @return bool
     */
    public function isOpen(): bool
    {
        return ! $this->isClosed();
    }

    /**
     * Is ticket open?
     *
     * @return bool
     */
    public function isClosed(): bool
    {
        return $this->status === 'Closed';
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attachments(): HasMany
    {
        return $this->hasMany(TicketAttachments::class, 'ticket_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
        //    return $this->hasMany('TicketComments', 'ticket_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function log(): HasMany
    {
        return $this->hasMany(TicketLog::class, 'ticket_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function workers(): HasMany
    {
        return $this->hasMany(TicketWorkers::class, 'ticket_id');
    }
}
