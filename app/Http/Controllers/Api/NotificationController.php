<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class NotificationController extends Controller
{

    /**
     * @param $user
     *
     * @return mixed
     */
    public function notificationCount($user)
    {
        return \Cache::remember("notification-info.user-{$user}", 60, function () use ($user) {
            try {
                return [
                    'count' => \App\User::findOrFail($user)->notifications->count(),
                    'data'  => \App\User::findOrFail($user)->notifications,
                ];
            } catch (\Exception $e) {
                return 0;
            }
        });
    }
}
