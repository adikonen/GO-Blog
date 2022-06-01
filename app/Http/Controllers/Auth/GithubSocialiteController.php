<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class GithubSocialiteController extends Controller
{
    public function redirectToGithub()
    {
        return Socialite::driver("github")->redirect();
    }

    public function handleCallback()
    { 
        return CallbackHandler::driver("github");
    }
}
