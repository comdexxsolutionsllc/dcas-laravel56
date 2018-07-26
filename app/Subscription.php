<?php

namespace App;

/**
 * App\Subscription
 *
 * @property int            $id
 * @property int            $user_id
 * @property string         $name
 * @property string         $stripe_id
 * @property string         $stripe_plan
 * @property int            $quantity
 * @property array          $trial_ends_at
 * @property array          $ends_at
 * @property array          $created_at
 * @property array          $updated_at
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereStripeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereStripePlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereTrialEndsAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Subscription whereUserId($value)
 * @mixin \Eloquent
 */
class Subscription extends BaseModel
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subscriptions';

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
        'name',
        'stripe_plan',
        'quantity',
        'trial_ends_at',
        'ends_at',
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
     * Get the user for this model.
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    /**
     * Set the trial_ends_at.
     *
     * @param  string $value
     *
     * @return void
     */
    public function setTrialEndsAtAttribute($value)
    {
        $this->attributes['trial_ends_at'] = ! empty($value) ? date($this->getDateFormat(), strtotime($value)) : null;
    }

    /**
     * Set the ends_at.
     *
     * @param  string $value
     *
     * @return void
     */
    public function setEndsAtAttribute($value)
    {
        $this->attributes['ends_at'] = ! empty($value) ? date($this->getDateFormat(), strtotime($value)) : null;
    }

    /**
     * Get trial_ends_at in array format
     *
     * @param  string $value
     *
     * @return array
     */
    public function getTrialEndsAtAttribute($value): array
    {
        return date('j/n/Y g:i A', strtotime($value));
    }

    /**
     * Get ends_at in array format
     *
     * @param  string $value
     *
     * @return array
     */
    public function getEndsAtAttribute($value): array
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
}
