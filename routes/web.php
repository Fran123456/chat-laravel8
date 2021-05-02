<?php

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

Route::get('/', function () {
    return view('welcome');
});

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\Chat\ChatController@chat')->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/friend-requests', 'App\Http\Controllers\FriendRequest\FriendRequest@requestView')->name('friend-requests');
