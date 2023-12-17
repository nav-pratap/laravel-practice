<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/create', [UserController::class, 'getCreate']);
Route::post('/create', [UserController::class, 'postCreate'])->name('create');
Route::get('get-all-session', function () {
    $session = session()->all();
    echo "<pre>";
    print_r($session);
});
Route::get('set-session', function (Request $request) {
    $request->session()->put('user_name', 'Naveen');
    $request->session()->put('user_id', '23');
    $request->session()->flash('status', 'Success');
    return redirect('get-all-session');
});
Route::get('destroy-session', function () {
    session()->forget(['user_name', 'user_id']);
    //session()->forget('user_id');
    return redirect('get-all-session');
});
