<?php

namespace App\Http\Controllers\UserProfile;

use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;
use Illuminate\View\View;

class UserProfile extends Controller
{
    public function change_password(Request $request): View
    {
        return view('userProfile.changePass', [
            'user' => Auth::user(),
        ]);
    }
    public function do_change_password(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'min:8', Password::defaults(), 'confirmed'],
        ], [
            'current_password.required' => 'Aktuální heslo je povinné.',
            'current_password.current_password' => 'Aktuální heslo není správné.',

            'password.required' => 'Nové heslo nesmí být prázdné.',
            'password.min' => 'Heslo musí obsahovat alespoň 8 znaků.',
            'password.defaults' => 'Heslo musí obsahovat alespoň 8 znaků.',
            'password.confirmed' => 'Hesla se neshodují.',
        ]);
        $user = User::where('id', Auth::user()->id)->first();
        $user->password = Hash::make($request->password);
        $user->updated_by = Auth::id();
        $user->save();

        return Redirect::route('profile_change_password')->with('status', 'password-changed');
    }
}
