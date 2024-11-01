<?php

namespace App\Http\Controllers;

use App\Models\Breed;
use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile(){
        $user = Auth::user();
        $breeds = Breed::all();
        $members = Member::where('master_id', $user->id)->get();
        return view('profile', compact('breeds', 'members'));
    }

    public function registerPage(){
       return view('register');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'password' => 'required|min:7|confirmed',
        ]);


        $user = new User;
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);

        $user->save();

        return redirect('/login');
    }

    public function loginPage(){
        return view('login');
    }

    public function login(Request $request) {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:7',
        ]);

        if(Auth::attempt($validatedData)){
            return redirect()->intended('/');
        }
        return redirect()->back()->with('error', 'Неверный пароль или почта');
    }
}
