<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\AccountType
 *
 * @property int                                                       $id
 * @property string                                                    $name
 * @property string|null                                               $description
 * @property string|null                                               $zone
 * @property string|null                                               $deleted_at
 * @property \Carbon\Carbon|null                                       $created_at
 * @property \Carbon\Carbon|null                                       $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\AccountType onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\AccountType whereZone($value)
 * @method static \Illuminate\Database\Query\Builder|\App\AccountType withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\AccountType withoutTrashed()
 * @mixin \Eloquent
 */
class AccountType extends Model
{

    use SoftDeletes;

    /**
     * @var array
     */
    protected $fillable = [
        'description',
        'name',
        'zone',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class)->withTimestamps();
    }
}
