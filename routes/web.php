<?php

use App\Http\Controllers\PostController;
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

Route::view('/', 'welcome',["title" => "Selamat Datang"]);
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