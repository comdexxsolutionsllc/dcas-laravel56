<?php

namespace App\Http\Controllers;

use App\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UsersController extends Controller
{

    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(): View
    {
        $users = User::paginate(25);

        return view('dashboard.admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(): View
    {
        return view('dashboard.admin.users.create');
    }

    /**
     * Store a new user in the storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        try {

            $data = $this->getData($request);

            User::create($data);

            return redirect()->route('users.user.index')->with('success_message', 'User was successfully added!');
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
            'name'     => 'required|string|min:1|max:255',
            'email'    => 'required|string|min:1|max:255',
            'password' => 'required|string|min:1|max:255',
            'slug'     => 'required|string|min:1|max:255',
        ];

        $data = $request->validate($rules);

        return $data;
    }

    /**
     * Display the specified user.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id): View
    {
        $user = User::findOrFail($id);

        return view('dashboard.admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id): View
    {
        $user = User::findOrFail($id);

        return view('dashboard.admin.users.edit', compact('user'));
    }

    /**
     * Update the specified user in the storage.
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

            $user = User::findOrFail($id);
            $user->update($data);

            return redirect()->route('users.user.index')->with('success_message', 'User was successfully updated!');
        } catch (Exception $exception) {

            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified user from the storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return redirect()->route('users.user.index')->with('success_message', 'User was successfully deleted!');
        } catch (Exception $exception) {

            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
}
