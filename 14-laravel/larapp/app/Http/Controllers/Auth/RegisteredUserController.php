<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users'],
            'phone' => ['required', 'numeric'],
            'birthdate' => ['required', 'date'],
            'gender' => ['required'],
            'address' => ['required'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);

        $user = User::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phone' => $request->phone,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);

         event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME); 
        //dd($request->all());
    }
}
