<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoleController extends Controller
{

    /**
     * RoleController constructor.
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
        $roles = Role::all();

        return view('dashboard.admin.roles.index', compact(['roles']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(): View
    {
        return view('dashboard.admin.roles.create');
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
            'name'  => 'required',
            'title' => 'nullable',
            'level' => 'nullable',
            'scope' => 'nullable',
        ]);

        $role = new Role;
        $role->name = $request->input('name');
        $role->title = $request->input('title');
        $role->level = $request->input('level');
        $role->scope = $request->input('scope');
        $role->save();

        flash('message', 'Successfully created nerd!');

        return redirect()->to(route('roles.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Role $role
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Role $role): View
    {
        return view('dashboard.admin.roles.show', compact('role'));
    }
}
