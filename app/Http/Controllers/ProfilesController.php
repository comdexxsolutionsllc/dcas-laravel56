<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProfilesController extends Controller
{

    /**
     * Display a listing of the profiles.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(): View
    {
        $profiles = Profile::with('user')->paginate(25);

        return view('profiles.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new profile.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(): View
    {
        $users = User::pluck('id', 'id')->all();

        return view('profiles.create', compact('users'));
    }

    /**
     * Store a new profile in the storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        try {
            $data = $this->getData($request);

            Profile::create($data);

            return redirect()->route('profiles.profile.index')->with('success_message', 'Profile was successfully added!');
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
            'user_id'        => 'nullable',
            'address_1'      => 'nullable|string|min:0|max:255',
            'address_2'      => 'nullable|string|min:0|max:255',
            'city'           => 'nullable|string|min:0|max:255',
            'state'          => 'nullable|string|min:0|max:255',
            'postal_code'    => 'nullable|string|min:0|max:255',
            'country'        => 'nullable|numeric|string|min:0|max:255',
            'country_code'   => 'nullable|numeric|min:0|max:4294967295',
            'npa_nxx_suffix' => 'nullable|numeric|min:0|max:4294967295',
            'phone_type'     => 'nullable',
        ];

        $data = $request->validate($rules);

        return $data;
    }

    /**
     * Display the specified profile.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id): View
    {
        $profile = Profile::with('user')->findOrFail($id);

        return view('profiles.show', compact('profile'));
    }

    /**
     * Show the form for editing the specified profile.
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id): View
    {
        $profile = Profile::findOrFail($id);
        $users = User::pluck('id', 'id')->all();

        return view('profiles.edit', compact('profile', 'users'));
    }

    /**
     * Update the specified profile in the storage.
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

            $profile = Profile::findOrFail($id);
            $profile->update($data);

            return redirect()->route('profiles.profile.index')->with('success_message', 'Profile was successfully updated!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified profile from the storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        try {
            $profile = Profile::findOrFail($id);
            $profile->delete();

            return redirect()->route('profiles.profile.index')->with('success_message', 'Profile was successfully deleted!');
        } catch (Exception $exception) {
            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
}
