<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class FacebookController extends Controller
{
    public function redirectToProvider() {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProvider() {
        $user = Socialite::driver('facebook')->user();

        $authUser = $this->findOrCreateUser($user);
        Auth::login($authUser, true);
        return redirect('/index');
    }

    public function findOrCreateUser($user)
    {
        $authUser = User::where('provider_id', $user->id)->first();

        if ($authUser) {
            return $authUser;
        }

        return User::create([
            'name'     => $user->name,
            'email'    => $user->email,
            'avatar'    => $user->avatar,
            'provider' => 'facebook',
            'provider_id' => $user->id
        ]);
    }
}
