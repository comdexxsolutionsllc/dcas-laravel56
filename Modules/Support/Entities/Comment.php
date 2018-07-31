<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use App\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Tags\HasTags;

/**
 * Modules\Support\Entities\Comment
 *
 * @property int                                   $id
 * @property int                                   $ticket_id
 * @property int                                   $user_id
 * @property string                                $comment
 * @property \Carbon\Carbon|null                   $created_at
 * @property \Carbon\Carbon|null                   $updated_at
 * @property-read \Modules\Support\Entities\Ticket $ticket
 * @property-read \App\User                        $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereUserId($value)
 * @mixin \Eloquent
 */
class Comment extends BaseModel
{

    use HasTags;

    /**
     * @var array
     */
    protected $fillable = [
        'ticket_id',
        'user_id',
        'comment',
    ];

    /**
     * @var array
     */
    protected $seedData = [];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    protected $with = ['user'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ticket(): BelongsTo
    {
        return $this->belongsTo(Ticket::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return array
     */
    protected function getSeedData(): array
    {
        return $this->seedData;
    }
}
