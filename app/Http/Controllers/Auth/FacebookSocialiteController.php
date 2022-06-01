<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class FacebookSocialiteController extends Controller
{
    public function redirectToFacebook()
    {
        return Socialite::driver("facebook")->redirect();
    }
    public function handleCallback()
    {
        return CallbackHandler::driver("facebook");
    }
}
