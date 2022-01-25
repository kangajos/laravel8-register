<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::query();
        if ($request->has("q")) {
            $q = $request->get("q");
            if (filter_var($q, FILTER_VALIDATE_EMAIL)) {
                $query->whereEmail($q);
            } else {
                $query->where("name", "like", "%{$q}%");
            }
        }

        # limit 20 rows perpage
        $users = $query->latest()->paginate(20);
        return view("web.pages.user.index", compact("users"));
    }

    public function profile()
    {
        $user = Auth::user();
        return view("web.pages.user.detail", compact('user'));
    }

    public function form()
    {
        $user = Auth::user();
        return view("web.pages.user.form", compact('user'));
    }

    public function update(Request $request)
    {
        # define rules

        $user = Auth::user();
        $rules = [
            "name" => "required|alpha_num",
            "email" => "required|email|unique:users,email,$user->id,id",
            "phone" => "required|numeric|digits:11",
            "address" => "required",
            'image' => "mimes:jpeg,png,jpg,gif,svg|max:2048"
        ];

        if ($request->password) {
            $rules["password"] = "required|confirmed";
        }
        # validation input
        $data = $request->validate($rules);
        if ($request->hasFile("image")) {
            $fileName = $request->file('image')->store("images");
            $data["image"] = $fileName;
        }

        # change plain text password to hash bcrypt
        if ($request->password) {
            $data["password"] = Hash::make($data["password"]);
        }
        User::find($user->id)->update($data);

        return redirect()->route('profile.detail')->with("success", "Profile changed successfully");
    }
}
