<?php

namespace App;

use Askedio\SoftCascade\Traits\SoftCascadeTrait;
use Bpocallaghan\Sluggable\HasSlug;
use Bpocallaghan\Sluggable\SlugOptions;
use if4lcon\Bareq\Visits;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;
use Laravel\Cashier\Billable;
use Laravel\Passport\HasApiTokens;
use Modules\Support\Entities\Comment;
use Modules\Support\Entities\Machine;
use Modules\Support\Entities\Ticket;
use Spatie\Permission\Traits\HasRoles;

/**
 * App\User
 *
 * @property int
 *               $id
 * @property string
 *               $name
 * @property string
 *               $email
 * @property string
 *               $password
 * @property string|null
 *               $remember_token
 * @property \Carbon\Carbon|null
 *               $created_at
 * @property \Carbon\Carbon|null
 *               $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[]
 *                $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Permission[]
 *                    $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[]
 *                    $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User wherePermissionIs($permission = '')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereRoleIs($role = '')
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Team[]
 *                    $rolesTeams
 * @property int|null
 *               $profile_id
 * @property string
 *               $slug
 * @property string|null
 *               $stripe_id
 * @property string|null
 *               $card_brand
 * @property string|null
 *               $card_last_four
 * @property string|null
 *               $trial_ends_at
 * @property string|null
 *               $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[]
 *                    $clients
 * @property-read \App\Profile
 *                    $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Cashier\Subscription[]
 *                    $subscriptions
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[]
 *                    $tokens
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\User onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCardBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereCardLastFour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereProfileId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereStripeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereTrialEndsAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\User withoutTrashed()
 * @property-read \Illuminate\Database\Eloquent\Collection|\Silber\Bouncer\Database\Ability[]  $abilities
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIs($role)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsAll($role)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereIsNot($role)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User role($roles)
 * @property-read string                                                                       $created_at_for_humans
 * @property-read string                                                                       $updated_at_for_humans
 * @property string|null                                                                       $username
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\AccountType[]                  $accountTypes
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Comment[] $comments
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Ticket[]  $tickets
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User whereUsername($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Machine[] $machines
 */
class User extends Authenticatable
{

    use Billable, HasApiTokens, HasRoles, HasSlug, Notifiable, SoftCascadeTrait, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @var array
     */
    protected $softCascade = [];

    /**
     * The relations to eager load on every query.
     *
     * @var array
     */
    //protected $with = ['accountTypes', 'profile'];

    /**
     * @return \Illuminate\Support\Collection
     */
    public static function trashed(): Collection
    {
        return self::onlyTrashed()->get();
    }

    /**
     * @return string
     */
    public function getCreatedAtForHumansAttribute(): string
    {
        return \Carbon\Carbon::createFromTimeStamp(strtotime($this->created_at))->diffForHumans();
    }

    /**
     * @return string
     */
    public function getUpdatedAtForHumansAttribute(): string
    {
        return \Carbon\Carbon::createFromTimeStamp(strtotime($this->updated_at))->diffForHumans();
    }

    /**
     * @return \if4lcon\Bareq\Visits
     */
    public function visits(): Visits
    {
        return visits($this);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function accountTypes(): BelongsToMany
    {
        return $this->belongsToMany(AccountType::class)->withTimestamps();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function machines(): HasMany
    {
        return $this->hasMany(Machine::class, 'user_id');
    }

    /**
     * @return HasOne
     */
    public function profile(): HasOne
    {
        return $this->hasOne(Profile::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tickets(): HasMany
    {
        // return $this->hasMany('Ticket', 'user_id');
        return $this->hasMany(Ticket::class);
    }

    /**
     * @return \Bpocallaghan\Sluggable\SlugOptions
     */
    protected function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->slugSeperator('-')->generateSlugFrom('name')->saveSlugTo('slug');
    }
}
