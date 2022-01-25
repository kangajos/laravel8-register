<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view("web.pages.register.index");
    }

    public function store(Request $request)
    {
        # validation input
        $data = $request->validate([
            "name" => "required|alpha_num",
            "email" => "required|email|unique:users,email",
            "phone" => "required|numeric|digits:11",
            "password" => "required|confirmed",
            "address" => "required"
        ]);

        # change plain text password to hash bcrypt
        $data["password"] = Hash::make($data["password"]);

        # insert data
        User::create($data);

        return redirect()->route("login.index")->with("success", "register successfully, please login.");
    }
}
