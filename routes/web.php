<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::view('/', 'welcome',["title" => "Selamat Datang"]);

#user routes
/*
Route::controller(UserController::class)->group(function(){
    Route::get("/register", 'register')->name("register-view")->middleware("guest");
    Route::post("/register/store","store")->name("register")->middleware("guest");
    Route::get("/login", "loginView")->name("login-view")->middleware("guest");
    Route::post("/login/authenticate")->name("login")->middleware("guest");
    Route::post("/logout","logout")->name("logout")->middleware("auth");
});
*/
 
Route::get('/auth/redirect', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/auth/callback', function () {
    $user = Socialite::driver('google')->user();
 
    // $user->token
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