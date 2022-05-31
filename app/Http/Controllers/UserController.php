<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    
    public function store(Request $request)
    {
        //
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

    public function authtenticate()
    {
    
    }
    public function logout(User $user)
    {
        Auth::logout($user);
        return redirect()->to("login");
    }
}
