<?php

namespace App;

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
class AccountType extends BaseModel
{

    use SoftDeletes;

    /**
     * @var array
     */
    protected $seedData = [
        ['name' => 'abuse', 'description' => '', 'zone' => '',],
        ['name' => 'accounting', 'description' => '', 'zone' => '',],
        ['name' => 'billing', 'description' => '', 'zone' => '',],
        ['name' => 'collections', 'description' => '', 'zone' => '',],
        ['name' => 'demo', 'description' => '', 'zone' => '',],
        ['name' => 'development', 'description' => '', 'zone' => '',],
        ['name' => 'guest', 'description' => '', 'zone' => '',],
        ['name' => 'hardware', 'description' => '', 'zone' => '',],
        ['name' => 'human_resources', 'description' => '', 'zone' => '',],
        ['name' => 'infrastructure', 'description' => '', 'zone' => '',],
        ['name' => 'investor_relations', 'description' => '', 'zone' => '',],
        ['name' => 'legal', 'description' => '', 'zone' => '',],
        ['name' => 'manager', 'description' => '', 'zone' => '',],
        ['name' => 'marketing', 'description' => '', 'zone' => '',],
        ['name' => 'networking', 'description' => '', 'zone' => '',],
        ['name' => 'operations', 'description' => '', 'zone' => '',],
        ['name' => 'peering_coordination', 'description' => '', 'zone' => '',],
        ['name' => 'provisioning', 'description' => '', 'zone' => '',],
        ['name' => 'quality_control', 'description' => '', 'zone' => '',],
        ['name' => 'sales', 'description' => '', 'zone' => '',],
        ['name' => 'security', 'description' => '', 'zone' => '',],
        ['name' => 'support_level_1', 'description' => '', 'zone' => '',],
        ['name' => 'support_level_2', 'description' => '', 'zone' => '',],
        ['name' => 'systems_administration', 'description' => '', 'zone' => '',],
        ['name' => 'vendor_relations', 'description' => '', 'zone' => '',],
        ['name' => 'webmaster', 'description' => '', 'zone' => '',],
        ['name' => 'white_gloves', 'description' => '', 'zone' => '',],
    ];

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

    /**
     * @return array
     */
    public function getSeedData(): array
    {
        return $this->seedData;
    }
}
