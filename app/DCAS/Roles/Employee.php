<?php

namespace DCAS\Roles;

use App\User;

/**
 * DCAS\Roles\Employee
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\AccountType[] $accountTypes
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Comment[] $comments
 * @property-read string $created_at_for_humans
 * @property-read string $updated_at_for_humans
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Machine[] $machines
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read \App\Profile $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property \Illuminate\Database\Eloquent\Collection|\Spatie\Tags\Tag[] $tags
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Cashier\Subscription[] $subscriptions
 * @property-read \Illuminate\Database\Eloquent\Collection|\Modules\Support\Entities\Ticket[] $tickets
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User role($roles)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User withAllTags($tags, $type = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\User withAnyTags($tags, $type = null)
 * @mixin \Eloquent
 */
class Employee extends User
{

    //
}
