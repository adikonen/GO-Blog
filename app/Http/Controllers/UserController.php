<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUserRequest;
class UserController extends Controller
{
 
    public function register()
    {
        $context = [
            "title" => "Go-Blog | Daftar"
        ];
        return view("users.register", $context);
    }

    public function loginView()
    {
        $context = [
            "title" => "Go-Blog | Login"
        ];
        return view("users.login", $context);
    }
    
    public function store(StoreUserRequest $request)
    {
        $validated = $request->validated();
        $validated["password"] = bcrypt($validated["password"]);
        User::create($validated);
        return redirect("/");
    }

    public function show(User $user)
    {
        //
    }

    public function update(Request $request, User $user)
    {
        //
    }

    public function destroy(User $user)
    {
        //
    }

    public function authenticate(Request $request)
    {
       
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'name' => 'Gagal Login',
        ]);
    }
    public function logout(User $user)
    {
        Auth::logout($user);
        return redirect()->to("login");
    }
}
