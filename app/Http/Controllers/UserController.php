<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserValidationRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create() {
        return view('users.create');
    } 

    public function store(UserValidationRequest $request) {
        $user = $request->validated();
        $user['password'] = Hash::make($request->password);
       
        $user = User::create($user);
        auth()->login($user);
        return redirect('/');
    } 
    
    public function login() {
        return view('users.login');
    } 
    
    public function authenicate(LoginRequest $request) {
        $user = $request->validated();

        if (auth()->attempt($user)){
            session()->regenerate();
            return redirect('/');
        };

        return back()
        ->withErrors(['email' => 'Your information does not matched our records'])
        ->onlyInput('email');
        
        

    } 
    public function logout(Request $request) {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}