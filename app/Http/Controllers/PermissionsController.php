<?php

namespace App\Http\Controllers;

use App\Permission;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PermissionsController extends Controller
{

    /**
     * Display a listing of the permissions.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $permissions = Permission::paginate(25);

        return view('dashboard.admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new permission.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        return view('dashboard.admin.permissions.create');
    }

    /**
     * Store a new permission in the storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $data = $this->getData($request);

            Permission::create($data);

            return redirect()->route('permissions.permission.index')->with('success_message', 'Permission was successfully added!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Get the request's data from the request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    protected function getData(Request $request): array
    {
        $rules = [
            'name'       => 'required|string|min:1|max:255',
            'guard_name' => 'required|string|min:1|max:255',

        ];

        $data = $request->validate($rules);

        return $data;
    }

    /**
     * Display the specified permission.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id): View
    {
        $permission = Permission::findOrFail($id);

        return view('dashboard.admin.permissions.show', compact('permission'));
    }

    /**
     * Show the form for editing the specified permission.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id): View
    {
        $permission = Permission::findOrFail($id);

        return view('dashboard.admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified permission in the storage.
     *
     * @param  int                     $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id, Request $request): RedirectResponse
    {
        try {
            $data = $this->getData($request);

            $permission = Permission::findOrFail($id);
            $permission->update($data);

            return redirect()->route('permissions.permission.index')->with('success_message', 'Permission was successfully updated!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified permission from the storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        try {
            $permission = Permission::findOrFail($id);
            $permission->delete();

            return redirect()->route('permissions.permission.index')->with('success_message', 'Permission was successfully deleted!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
}
