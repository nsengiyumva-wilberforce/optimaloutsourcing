<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'role' => $request->role,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        //check if registration is successful
        if (!$user) {
            return redirect()->back()->with('error', 'Registration failed!');
        } else {
            // Create a profile for the user
            $user->profile()->create([
                'first_name' => $user->first_name,
                'last_name' => $user->last_name,
                'phone_number' => $user->phone_number,
                'email' => $user->email,
            ]);

            event(new Registered($user));
            Auth::login($user);
            return redirect('/jobs/manage'); // Redirect to the desired page after successful registration
        }

    }
}
