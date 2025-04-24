<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\SocialWelcome;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class SocialLoginController extends Controller
{
    public function redirect($driver): RedirectResponse
    {
        return Socialite::driver($driver)->redirect();
    }

    public function callback($driver): RedirectResponse
    {
        $user = Socialite::driver($driver)->user();

        $userExists = User::where('email', $user->getEmail())->first();

        if ($userExists) {

            Auth::login($userExists);
            Session::regenerate();
            return redirect()->intended('/')->with('success', $userExists->name . ' خوش امدید.');
        }

        $password = str::password(12);

        $userCreated = User::create([
            'name' => $user->getName(),
            'driver_id' => $user->getId(),
            'driver_name' => $driver,
            'email' => $user->getEmail(),
            'password' => bcrypt($password),
        ]);

        Auth::login($userCreated);
        Session::regenerate();

        Mail::to($user->getEmail())->send(new SocialWelcome($userCreated, $password));

        return redirect()->intended('/')->with('success', $userCreated->name . ' خوش امدید.');
    }
}
