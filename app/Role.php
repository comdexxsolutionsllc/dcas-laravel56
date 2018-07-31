<?php

namespace App;

use Spatie\Permission\Models\Role as BaseRole;

/**
 * App\Role
 *
 * @property int                                                                                  $id
 * @property string                                                                               $name
 * @property string                                                                               $guard_name
 * @property array                                                                                $created_at
 * @property array                                                                                $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @method static \Illuminate\Database\Eloquent\Builder|\Spatie\Permission\Models\Role permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Role extends BaseRole
{

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'guard_name',
    ];

    /**
     * @var array
     */
    protected $seedData = [
        ['name' => 'abuse', 'guard_name' => 'web',],
        ['name' => 'accounting', 'guard_name' => 'web',],
        ['name' => 'billing', 'guard_name' => 'web',],
        ['name' => 'collections', 'guard_name' => 'web',],
        ['name' => 'demo', 'guard_name' => 'web',],
        ['name' => 'development', 'guard_name' => 'web',],
        ['name' => 'employee', 'guard_name' => 'web',],
        ['name' => 'guest', 'guard_name' => 'web',],
        ['name' => 'hardware', 'guard_name' => 'web',],
        ['name' => 'humanresources', 'guard_name' => 'web',],
        ['name' => 'infrastructure', 'guard_name' => 'web',],
        ['name' => 'investorrelations', 'guard_name' => 'web',],
        ['name' => 'legal', 'guard_name' => 'web',],
        ['name' => 'managers', 'guard_name' => 'web',],
        ['name' => 'marketing', 'guard_name' => 'web',],
        ['name' => 'networking', 'guard_name' => 'web',],
        ['name' => 'operations', 'guard_name' => 'web',],
        ['name' => 'peeringcoordination', 'guard_name' => 'web',],
        ['name' => 'provisioning', 'guard_name' => 'web',],
        ['name' => 'qualitycontrol', 'guard_name' => 'web',],
        ['name' => 'receptionist', 'guard_name' => 'web',],
        ['name' => 'sales', 'guard_name' => 'web',],
        ['name' => 'security', 'guard_name' => 'web',],
        ['name' => 'superadmin', 'guard_name' => 'web',],
        ['name' => 'supportlevel1', 'guard_name' => 'web',],
        ['name' => 'supportlevel2', 'guard_name' => 'web',],
        ['name' => 'systemsadministration', 'guard_name' => 'web',],
        ['name' => 'vendorrelations', 'guard_name' => 'web',],
        ['name' => 'webmaster', 'guard_name' => 'web',],
        ['name' => 'whitegloves', 'guard_name' => 'web',],
        /**
         * @todo enumerate all roles.
         */
    ];

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
     * @return array
     */
    public function getSeedData(): array
    {
        return $this->seedData;
    }
}
