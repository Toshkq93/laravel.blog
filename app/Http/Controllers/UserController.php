<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUser;
use App\Http\Requests\UserLoginRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create(){
        return view('front.user.signup');
    }

    public function store(StoreUser $request){
        $user = User::query()->create([
           'name' => $request->name,
           'email' => $request->email,
           'password' => bcrypt($request->password),
        ]);
        session()->flash('success', 'Вы успешно зарегистрировались');
        Auth::login($user);
        return redirect()->home();
    }

    public function login(){
        return view('front.user.login');
    }

    public function signin(UserLoginRequest $request){
        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            session()->flash('success', 'Вы успешно вошли');
            if (Auth::user()->is_admin){
                return redirect()->route('admin.index');
            }else{
                return redirect()->home();
            }
        }
        return redirect()->back()->with('error' , 'не верно введы емаил или пароль');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->home();
    }
}
