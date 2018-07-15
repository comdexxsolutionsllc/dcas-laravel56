<?php

namespace App\Http\Controllers;

use App\Permission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PermissionController extends Controller
{

    /**
     * PermissionController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(): View
    {
        $permissions = Permission::all();

        return view('dashboard.admin.permissions.index', compact(['permissions']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(): View
    {
        return view('dashboard.admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'entity_id'   => 'required',
            'entity_type' => 'required',
            'forbidden'   => 'required',
            'scope'       => 'nullable',
        ]);

        $permission = new Permission;
        $permission->entity_id = $request->input('entity_id');
        $permission->entity_type = $request->input('entity_type');
        $permission->forbidden = $request->input('forbidden');
        $permission->scope = $request->input('scope');
        $permission->save();

        flash('message', 'Successfully created nerd!');

        return redirect()->to(route('permissions.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Permission $permission
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Permission $permission): View
    {
        return view('dashboard.admin.permissions.show', compact('permission'));
    }
}
