<?php

namespace Modules\Support\Entities;

use App\BaseModel;
use App\User;
use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Tags\HasTags;

/**
 * Modules\Support\Entities\Comment
 *
 * @property int                                                                                 $id
 * @property int                                                                                 $ticket_id
 * @property int                                                                                 $user_id
 * @property string                                                                              $comment
 * @property \Carbon\Carbon|null                                                                 $created_at
 * @property \Carbon\Carbon|null                                                                 $updated_at
 * @property-read \Modules\Support\Entities\Ticket                                               $ticket
 * @property-read \App\User                                                                      $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereTicketId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereUserId($value)
 * @mixin \Eloquent
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Tags\Tag[]                         $tags
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment withAllTags($tags, $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment withAnyTags($tags, $type = null)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activity
 * @property-read \Cog\Laravel\Love\LikeCounter\Models\LikeCounter $dislikesCounter
 * @property-read bool $disliked
 * @property-read int $dislikes_count
 * @property-read bool $liked
 * @property-read int $likes_count
 * @property-read int $likes_diff_dislikes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cog\Laravel\Love\Like\Models\Like[] $likesAndDislikes
 * @property-read \Cog\Laravel\Love\LikeCounter\Models\LikeCounter $likesCounter
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment orderByDislikesCount($direction = 'desc')
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment orderByLikesCount($direction = 'desc')
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereDislikedBy($userId = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\Modules\Support\Entities\Comment whereLikedBy($userId = null)
 */
class Comment extends BaseModel
{

    use HasTags, Likeable;

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
