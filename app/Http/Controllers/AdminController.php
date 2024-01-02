<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Notifications\AdminLogin;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    //
    public function show() {

        return view('console');
    }

    public function login() {

        return view('admin.login');
    }

    public function sendToken(Request $request) {

        $creds = $request->validate(['email' => 'email', 'password' => 'required']);
        $admin = Admin::where(['email' => $creds['email'], 'password' => $creds['password']])->first();
        if($admin == null)
            return redirect()->back()->withErrors('login', 'Invalid credentials');
        $url = URL::temporarySignedRoute('login.signed', now()->addMinutes(20), ['admin' => $admin->id ]);
        $admin->notify(new AdminLogin($url));

        return $url; //TODO: to change later
    }

    public function handle(Admin $admin) {

        Auth::login($admin);
        request()->session()->regenerate();
        redirect('console');
    }

}
