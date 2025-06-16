<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class PasswordController extends Controller
{
    /**
     * Update the user's password.
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('updatePassword', [
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'min:8', Password::defaults(), 'confirmed'],
        ], [
            'current_password.required' => 'Aktuální heslo je povinné.',
            'current_password.current_password' => 'Aktuální heslo není správné.',
            'password.required' => 'Nové heslo je povinné.',
            'password.confirmed' => 'Hesla se neshodují.',
            'password' => 'Heslo musí obsahovat alespoň 8 znaků.'
        ]);

        $request->user()->update([
            'password' => Hash::make($validated['password']),
            'updated_by' => Auth::user()->id,
        ]);

        return back()->with('status', 'password-updated');
    }
}
