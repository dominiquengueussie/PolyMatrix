<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Agence;
use App\Models\Roles;
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
        $agences = Agence::all();
        $roles = Roles::all();
        return view('auth.register', compact(['agences', 'roles']));
    }
    public function registers()
    {
        $agences = Agence::all();
        return view('auth.registers', compact('agences'));
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

        //return dd($request->all());
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'poste' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255'],
            'adresse' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'poste' => $request->poste,
            'adresse' => $request->adresse,
            'telephone' => $request->phone,
            'agence_id' => $request->agence,
            'role_id' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('register')->with('success', 'Utilisateur ajouté avec succès');
        event(new Registered($user));

        Auth::login($user);
        //return redirect(RouteServiceProvider::HOME);
    }
}
