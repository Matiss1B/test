<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ViewErrorBag;
use Session;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use App\Models\User;

class CustomAuth extends Controller
{
    public function home(){
        return view('home');
    }
    public function register(){
        return view('register');
    }
    public function login(Request $request){
        $request->validate([
            "email"=> "required|max:20|min:5",
            "password"=> "required|max:20|min:5",
        ]);
        $credentials = $request->only("email", "password");
        if(Auth::attempt($credentials)){
            $userCheck = User::where('email', $request->only('email'))->first();
            $request->session()->put('user_id', $userCheck->id);
            $userCheck->update([
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
            return redirect('homepage');
        }
        return redirect('/')->with('message', "Login details are not valid!");
    }
    public function signup(Request $request){
        $request->session()->forget('name');
        $request->validate([
            'register-name' => 'required',
            "register-email"=> "required|max:20|min:5",
            "register-password"=> "required|max:20|min:5",
        ]);
        $userCheck = User::where('email', $request->only('register-email'))->first();
        if($userCheck) {
            $request->session()->put('register-email', 'This email is taken!');
            return redirect('/');
        }else {
            $data = $request->all();
            $this->create($data);
            return redirect('/');
        }
    }
    public function create(array $data){
        return  User::create([
            'name'=> $data['register-name'],
            'email'=> $data['register-email'],
            'password'=> Hash::make($data['register-password']),
        ]);
    }
}
