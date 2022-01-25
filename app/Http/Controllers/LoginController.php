<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view("web.pages.login.index");
    }

    public function post(Request $request)
    {
        $data = $request->only(["email", "password"]);

        $check = Auth::attempt($data);
        if ($check) {
            return redirect()->route('profile.detail');
        }
        return back()->withInput()->with("error", "Username or Password incorect, please try again.");
    }

    public function out()
    {
        Auth::logout();
        return redirect()->route("login.index")->with("success", "Logout succesfully");
    }
}
