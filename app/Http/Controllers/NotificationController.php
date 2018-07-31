<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{

    /**
     * NotificationController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth'])->only(['index', 'show', 'update', 'markAsRead',]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'notify/index';
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return 'notify/index' . $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param                          $id
     */
    public function markAsRead(Request $request, $id)
    {
        //
    }

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
