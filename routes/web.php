<?php

use App\Http\Controllers\Auth\GithubSocialiteController;
use App\Http\Controllers\Auth\GoogleSocialiteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'welcome',["title" => "Selamat Datang"])->middleware("auth")->name("home");


#user routes

Route::controller(UserController::class)->group(function(){
    Route::middleware("guest")->group(function(){
        Route::get("/register", 'register')->name("register-view");
        Route::post("/register/store","store")->name("register");
        Route::get("/login", "loginView")->name("login");
        Route::post("/login/authenticate", "authenticate")->name("authenticate");
    });
    Route::get("/logout","logout")->name("logout")->middleware("auth");
});

#socialite route
Route::middleware("guest")->group(function(){
    Route::controller(GoogleSocialiteController::class)->group(function(){
        Route::get("auth/redirect", "redirectToGoogle")->name("google-redirect");
        Route::get("auth/callback", "handleCallback")->name("google-callback");   
    });
    Route::controller(GithubSocialiteController::class)->group(function(){
        Route::get("auth/redirect/github", "redirectToGithub")->name("github-redirect");
        Route::get("auth/callback/github", "handleCallback")->name("github-callback");
    });
});

#posts routes
Route::resource("/post", PostController::class, [
    "names" => [
        "index" => "posts",
        "show" => "single-post"
    ],
    "only" => [
        "index",
        "show"    
    ]
]);
Route::resource("/post", PostController::class, [
    "names" => [
        "create" => "create-post",
        "edit" => "edit-post",
        "store" => "store-post",
        "update" => "update-post",
        "delete" => "delete-post"    
    ],
    "except" => [
        "index",
        "show"    
    ]
])->middleware("auth");