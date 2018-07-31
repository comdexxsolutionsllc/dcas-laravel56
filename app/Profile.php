<?php

namespace App;

use Cog\Laravel\Love\Likeable\Models\Traits\Likeable;
use Spatie\Tags\HasTags;

/**
 * App\Profile
 *
 * @property int                                                                                 $id
 * @property int|null                                                                            $user_id
 * @property string|null                                                                         $address_1
 * @property string|null                                                                         $address_2
 * @property string|null                                                                         $city
 * @property string|null                                                                         $state
 * @property string|null                                                                         $postal_code
 * @property string|null                                                                         $country
 * @property int|null                                                                            $country_code
 * @property int|null                                                                            $npa_nxx_suffix
 * @property string|null                                                                         $phone_type
 * @property array                                                                               $deleted_at
 * @property array                                                                               $created_at
 * @property array                                                                               $updated_at
 * @property-read \App\User|null                                                                 $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereAddress1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereAddress2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereCountryCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereNpaNxxSuffix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile wherePhoneType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereUserId($value)
 * @mixin \Eloquent
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Tags\Tag[]                         $tags
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile withAllTags($tags, $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile withAnyTags($tags, $type = null)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activity
 * @property-read \Cog\Laravel\Love\LikeCounter\Models\LikeCounter $dislikesCounter
 * @property-read bool $disliked
 * @property-read int $dislikes_count
 * @property-read bool $liked
 * @property-read int $likes_count
 * @property-read int $likes_diff_dislikes_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cog\Laravel\Love\Like\Models\Like[] $likesAndDislikes
 * @property-read \Cog\Laravel\Love\LikeCounter\Models\LikeCounter $likesCounter
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile orderByDislikesCount($direction = 'desc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile orderByLikesCount($direction = 'desc')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereDislikedBy($userId = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Profile whereLikedBy($userId = null)
 */
class Profile extends BaseModel
{

    use HasTags, Likeable;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'address_1',
        'address_2',
        'city',
        'state',
        'postal_code',
        'country',
        'country_code',
        'npa_nxx_suffix',
        'phone_type',
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
    //protected $with = ['user'];

    /**
     * Get deleted_at in array format
     *
     * @param  string $value
     *
     * @return array
     */
    public function getDeletedAtAttribute($value): array
    {
        return date('j/n/Y g:i A', strtotime($value));
    }

    /**
     * Get created_at in array format
     *
     * @param  string $value
     *
     * @return array
     */
    public function getCreatedAtAttribute($value): array
    {
        return date('j/n/Y g:i A', strtotime($value));
    }

    /**
     * Get updated_at in array format
     *
     * @param  string $value
     *
     * @return array
     */
    public function getUpdatedAtAttribute($value): array
    {
        return date('j/n/Y g:i A', strtotime($value));
    }

    /**
     * Get the user for this model.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * @return array
     */
    protected function getSeedData(): array
    {
        return $this->seedData;
    }
}
