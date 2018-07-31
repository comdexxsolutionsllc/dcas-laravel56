<?php

namespace App;

use Spatie\Permission\Models\Permission as BasePermission;

/**
 * App\Permission
 *
 * @property int                                                                                  $id
 * @property string                                                                               $name
 * @property string                                                                               $guard_name
 * @property array                                                                                $created_at
 * @property array                                                                                $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[]       $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\Spatie\Permission\Models\Permission permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\Spatie\Permission\Models\Permission role($roles)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Permission extends BasePermission
{

    /**
     * @var array
     */
    protected $seedData = [
        ['name' => 'deactivated', 'guard_name' => 'web',],
        ['name' => 'marked_fraud', 'guard_name' => 'web',],
        ['name' => 'api', 'guard_name' => 'web',],
        ['name' => 'billing', 'guard_name' => 'web',],
        ['name' => 'email', 'guard_name' => 'web',],
        ['name' => 'email_announce_only', 'guard_name' => 'web',],
        ['name' => 'email_emergency_only', 'guard_name' => 'web',],
        ['name' => 'ssh', 'guard_name' => 'web',],
        ['name' => 'ticketing', 'guard_name' => 'web',],
        /**
         * @todo enumerate all permissions.
         */
    ];

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
     * Get created_at.
     *
     * @param  string $value
     *
     * @return string
     */
    public function getCreatedAtAttribute($value): string
    {
        return date('j/n/Y g:i A', strtotime($value));
    }

    /**
     * Get updated_at.
     *
     * @param  string $value
     *
     * @return string
     */
    public function getUpdatedAtAttribute($value): string
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
