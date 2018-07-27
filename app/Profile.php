<?php

namespace App;

/**
 * App\Profile
 *
 * @property int                 $id
 * @property int|null            $user_id
 * @property string|null         $address_1
 * @property string|null         $address_2
 * @property string|null         $city
 * @property string|null         $state
 * @property string|null         $postal_code
 * @property string|null         $country
 * @property int|null            $country_code
 * @property int|null            $npa_nxx_suffix
 * @property string|null         $phone_type
 * @property array               $deleted_at
 * @property array               $created_at
 * @property array               $updated_at
 * @property-read \App\User|null $user
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
 */
class Profile extends BaseModel
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'profiles';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

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
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

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
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
