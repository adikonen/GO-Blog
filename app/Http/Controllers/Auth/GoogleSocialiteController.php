<?php

namespace App\Http\Controllers\Auth;
use Exception;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleSocialiteController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleCallback()
    {
        try 
        {
            $googleAccount = Socialite::driver('google')->user();
            $findUser = User::where("social_id", $googleAccount->id)->first();
            
            if($findUser === null)
            {
                $newUser = User::create([
                    "name" => $googleAccount->name,
                    "email" => $googleAccount->email,
                    "password" => bcrypt("olangGila")
                ]);
                #karena null able sistem malah otomatis memprioritaskan memberikan nilai null ketimbang menulis nilai itu sendiri
                $newUser->social_id = $googleAccount->id;
                $newUser->social_type = 'google';
                $newUser->save();

                Auth::login($newUser);
            }
            else Auth::login($findUser);

            return redirect("/");
        }
        catch(Exception $e)
        {
            return redirect()->to("login")->withErrors("Gagal Login!");
        }
    }
}
