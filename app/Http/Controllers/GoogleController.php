<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Socialite;
use Auth;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->scopes(['https://www.googleapis.com/auth/calendar.readonly'])->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        // Encuentra o crea el usuario en la base de datos
        $authUser = User::updateOrCreate([
            'email' => $user->email,
        ], [
            'name' => $user->name,
            'google_id' => $user->id,
            'avatar' => $user->avatar,
            'token' => $user->token,
            'refresh_token' => $user->refreshToken,
        ]);

        Auth::login($authUser, true);

        return redirect('/calendar');
    }
}
