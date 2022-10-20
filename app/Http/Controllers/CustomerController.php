<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function index()
    {
        return view ('auth.login');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('user_name','password');
        if (Auth::attempt($credentials))
        {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have successfully loggedin');
        }
        return redirect('login')->withSuccess('You have enterred invalid credentials');
    }

    public function postRegistration(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'user_name' => 'required|unique:customers',
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect('dashboard')->withSuccess('You have successfully registered !');
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect('login')->withSuccess("You don't have any access");
    }

    public function create(array $data)
    {
        return Customer::create([
            'customer_name' => $data['customer_name'],
            'user_name' => $data['user_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

}