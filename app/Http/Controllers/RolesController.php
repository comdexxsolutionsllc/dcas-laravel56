<?php

namespace App\Http\Controllers;

use App\Role;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RolesController extends Controller
{

    /**
     * Display a listing of the roles.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(): View
    {
        $roles = Role::paginate(25);

        return view('dashboard.admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new role.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(): View
    {
        return view('dashboard.admin.roles.create');
    }

    /**
     * Store a new role in the storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $data = $this->getData($request);

            Role::create($data);

            return redirect()->route('roles.role.index')->with('success_message', 'Role was successfully added!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Get the request's data from the request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    protected function getData(Request $request)
    {
        $rules = [
            'name'       => 'required|string|min:1|max:255',
            'guard_name' => 'required|string|min:1|max:255',

        ];

        $data = $request->validate($rules);

        return $data;
    }

    /**
     * Display the specified role.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id): View
    {
        $role = Role::findOrFail($id);

        return view('dashboard.admin.roles.show', compact('role'));
    }

    /**
     * Show the form for editing the specified role.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id): View
    {
        $role = Role::findOrFail($id);

        return view('dashboard.admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified role in the storage.
     *
     * @param                          $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Request $request): RedirectResponse
    {
        try {
            $data = $this->getData($request);

            $role = Role::findOrFail($id);
            $role->update($data);

            return redirect()->route('roles.role.index')->with('success_message', 'Role was successfully updated!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified role from the storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        try {
            $role = Role::findOrFail($id);
            $role->delete();

            return redirect()->route('roles.role.index')->with('success_message', 'Role was successfully deleted!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
}
