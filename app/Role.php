<?php

namespace App;

use Spatie\Permission\Models\Role as BaseRole;

/**
 * App\Role
 *
 * @property int                                                                                  $id
 * @property string                                                                               $name
 * @property string                                                                               $guard_name
 * @property \Carbon\Carbon|null                                                                  $created_at
 * @property \Carbon\Carbon|null                                                                  $updated_at
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

    //
}
