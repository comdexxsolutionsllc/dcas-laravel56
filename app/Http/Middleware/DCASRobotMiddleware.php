<?php

namespace App\Http\Middleware;

use Illuminate\Http\Request;
use Spatie\RobotsMiddleware\RobotsMiddleware;

class DCASRobotMiddleware extends RobotsMiddleware
{
    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return string|bool
     */
    protected function shouldIndex(Request $request)
    {
        return $request->segment(1) !== 'admin';
    }
}
