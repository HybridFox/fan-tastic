<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Socialite;
use App\User;
use Illuminate\Support\Facades\Auth;

class TwitterController extends Controller
{
    public function redirectToProvider() {
        return Socialite::driver('twitter')->redirect();
    }

    public function handleProvider() {
        $user = Socialite::driver('twitter')->user();

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
            'provider' => 'twitter',
            'provider_id' => $user->id
        ]);
    }
}
