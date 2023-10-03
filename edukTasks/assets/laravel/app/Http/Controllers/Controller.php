<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;


    public function login()
    {
        return view('components.loginForm');
    }

    public function create()
    {
        return view('components.registerForm');
    }

    public function dashboard()
    {
        return view('user.dashboard');
    }

    public function testWelcome($firstname)
    {
        $user = User::findOrFail($firstname); 
        return view('user.testWelcome',[
            'user' => $user,
        ]);
    }

    public function testPlacement($firstname)
    {
        $user = User::findOrFail($firstname); 
        return view('user.testPlacement',[
            'user' => $user,
        ]);
    }


    public function petSelection($firstname)
    {
        $user = User::findOrFail($firstname); 
        return view('user.petSelection',[
            'user' => $user,
        ]);
    }

    public function avatarSelection($firstname)
    {
        $user = User::findOrFail($firstname); 
        return view('user.avatarSelection',[
            'user' => $user,
        ]);
    }

    public function mapSelection($firstname)
    {
        $user = User::findOrFail($firstname); 
        return view('user.mapSelection',[
            'user' => $user,
        ]);
    }

    public function saveUser(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('testWelcome', ['user' => $user->id]);
    }
} 
