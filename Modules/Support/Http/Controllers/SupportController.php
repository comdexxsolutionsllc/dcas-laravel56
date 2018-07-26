<?php

namespace Modules\Support\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\View;

class SupportController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(): View
    {
        return view('support::index');
    }
}
