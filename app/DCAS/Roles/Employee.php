<?php

namespace DCAS\Roles;

use App\User;

/**
 * DCAS\Roles\Employee
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\AccountType[]
 *                    $accountTypes
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[]
 *                    $clients
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Comment[]
 *                    $comments
 * @property-read string
 *                    $created_at_for_humans
 * @property-read string
 *                    $updated_at_for_humans
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Machine[]
 *                    $machines
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[]
 *                $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[]
 *                    $permissions
 * @property-read \App\Profile
 *                    $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[]
 *                    $roles
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Tags\Tag[]
 *               $tags
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Cashier\Subscription[]
 *                    $subscriptions
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Ticket[]
 *                    $tickets
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[]
 *                    $tokens
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User role($roles)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User withAllTags($tags, $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User withAnyTags($tags, $type = null)
 * @mixin \Eloquent
 * @property int
 *               $id
 * @property string
 *               $name
 * @property string
 *               $email
 * @property string|null
 *               $username
 * @property string
 *               $password
 * @property string
 *               $slug
 * @property string|null
 *               $register_ip
 * @property string|null
 *               $remember_token
 * @property string|null
 *               $deleted_at
 * @property \Carbon\Carbon|null
 *               $created_at
 * @property \Carbon\Carbon|null
 *               $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\DCAS\Roles\Employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DCAS\Roles\Employee whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DCAS\Roles\Employee whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DCAS\Roles\Employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DCAS\Roles\Employee whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DCAS\Roles\Employee wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DCAS\Roles\Employee whereRegisterIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DCAS\Roles\Employee whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DCAS\Roles\Employee whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DCAS\Roles\Employee whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\DCAS\Roles\Employee whereUsername($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Activitylog\Models\Activity[] $activity
 */
class Employee extends User
{

    //
}
