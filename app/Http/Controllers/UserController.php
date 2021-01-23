<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Authenticatable;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function edit()
    {

        $user = Auth::user();

        return view('auth.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'address' => ['string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255' . Rule::unique('users')->ignore($user->id)],
            'password' => ['nullable', 'min:8', 'same:confirm_password'],
            'confirm_password' => ['nullable|min:8|required_with:password|same:password']
        ]);

        $user->fill([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ])->save();

        if (!empty($request->password)) {
            $user->fill([
                'password' => bcrypt($request->password)
            ])->save();
        }

        return redirect()->back()->with('success', 'Το προφίλ ενημερώθηκε με επιτυχία.')->withInput();

    }

    public function destroy(User $user)
    {
        $user->fill([
            'role_id' => 3
        ])->save();

        return redirect(route('welcome.index'));
    }
}
