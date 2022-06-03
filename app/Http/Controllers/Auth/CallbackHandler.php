<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Exception;

class CallbackHandler
{
    public static function driver(string $driver)
    {
        try {
           self::control($driver);
        }
        catch(Exception $e)
        {
            #dd($e->getMessage());
            return redirect()->to("login")->withErrors("Gagal Login!");
        }
        return redirect()->route("home");
    }

    private static function control(string $driver)
    {
        $socialAccount = Socialite::driver($driver)->user();
        $findUser = User::where("social_id", $socialAccount->id)->first();
        $name = $socialAccount->name ?? $socialAccount->nickname;
        if($findUser === null)
        {
            $newUser = User::create([
                "name" => $name,
                "email" => $socialAccount->email,
                "password" => bcrypt("olangGila")
            ]);
            #karena null able sistem malah otomatis memprioritaskan memberikan nilai null ketimbang menulis nilai itu sendiri
            $newUser->social_id = $socialAccount->id;
            $newUser->social_type = $driver;
            $newUser->save();

            Auth::login($newUser);
        }
        else
        {
            Auth::login($findUser);
        } 
    }
}
