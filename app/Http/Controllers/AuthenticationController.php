<?php

namespace App\Http\Controllers;

use App\Models\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AuthenticationController extends Controller
{
    //
    public function index(Request $request){
        return view("welcome");
    }
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->post('email');
        $password = $request->post('password');

        $user = DB::table('user')->where('email', $email)->first();

        if ($user && Hash::check($password, $user->password)) {
            $request->session()->put('username', $email);
            return redirect('/dashboard')->with('successMsg', 'Welcome ' . $email . '!');
        } else {
            return back()->with('errorMsg', 'Invalid Username & Password.');
        }
    }
    public  function register(){
        return view("register");
    }
    public function registeration(Request $request)
    {
        // Validate the request
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'balance' => 'required',
        ]);
        $name = $request->post('name');
        $email = $request->post('email');
        $password = $request->post('password');
        $balance = $request->post('balance');

        $user = Authentication::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'balance' => $balance,
        ]);
        if ($user) {
            return redirect('/')->with('successMsg', 'Registration successful!');
        } else {
            return redirect()->back()->with('errorMsg', 'Registration Failed!');
        }

    }
    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/')->with('errorMsg','You Have Been Logout.');
    }
}
