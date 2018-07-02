<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Profile
 *
 * @property int                 $id
 * @property int                 $user_id
 * @property string|null         $address_1
 * @property string|null         $address_2
 * @property string|null         $city
 * @property string|null         $state
 * @property string|null         $postal_code
 * @property string|null         $country
 * @property int|null            $country_code
 * @property int|null            $npa_nxx_suffix
 * @property string|null         $phone_type
 * @property string|null         $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\User      $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Profile onlyTrashed()
 * @method static bool|null restore()
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
 * @method static \Illuminate\Database\Query\Builder|\App\Profile withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Profile withoutTrashed()
 * @mixin \Eloquent
 */
class Profile extends Model
{

    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
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
     * @return BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
