<?php

namespace App\Http\Controllers;

use App\Subscription;
use App\User;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SubscriptionsController extends Controller
{

    /**
     * Display a listing of the subscriptions.
     *
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $subscriptions = Subscription::with('user')->paginate(25);

        return view('subscriptions.index', compact('subscriptions'));
    }

    /**
     * Show the form for creating a new subscription.
     *
     * @return \Illuminate\View\View
     */
    public function create(): View
    {
        $users = User::pluck('name', 'id')->all();
        $stripes = Stripe::pluck('id', 'id')->all();

        return view('subscriptions.create', compact('users', 'stripes'));
    }

    /**
     * Store a new subscription in the storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        try {

            $data = $this->getData($request);

            Subscription::create($data);

            return redirect()->route('subscriptions.subscription.index')->with('success_message', 'Subscription was successfully added!');
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
            'user_id'       => 'required',
            'name'          => 'required|string|min:1|max:255',
            'stripe_id'     => 'required',
            'stripe_plan'   => 'required|string|min:1|max:255',
            'quantity'      => 'required|numeric|min:-2147483648|max:2147483647',
            'trial_ends_at' => 'nullable|date_format:j/n/Y g:i A',
            'ends_at'       => 'nullable|date_format:j/n/Y g:i A',

        ];

        $data = $request->validate($rules);

        return $data;
    }

    /**
     * Display the specified subscription.
     *
     * @param $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id): View
    {
        $subscription = Subscription::with('user', 'stripe')->findOrFail($id);

        return view('subscriptions.show', compact('subscription'));
    }

    /**
     * Show the form for editing the specified subscription.
     *
     * @param $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id): View
    {
        $subscription = Subscription::findOrFail($id);
        $users = User::pluck('name', 'id')->all();
        $stripes = Stripe::pluck('id', 'id')->all();

        return view('subscriptions.edit', compact('subscription', 'users', 'stripes'));
    }

    /**
     * Update the specified subscription in the storage.
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

            $subscription = Subscription::findOrFail($id);
            $subscription->update($data);

            return redirect()->route('subscriptions.subscription.index')->with('success_message', 'Subscription was successfully updated!');
        } catch (Exception $exception) {

            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Remove the specified subscription from the storage.
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        try {
            $subscription = Subscription::findOrFail($id);
            $subscription->delete();

            return redirect()->route('subscriptions.subscription.index')->with('success_message', 'Subscription was successfully deleted!');
        } catch (Exception $exception) {

            return back()->withInput()->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }
}
