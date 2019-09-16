<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index () {
        return view("register", ["error" => false]);
    }

    public function store (Request $request) {

        $userData = $request->only(["name","lastname","email","password"]);

        if( !User::create($userData) ) {
            return view("register", ["error" => true, "message" => "Failed creating user!"]);
        }

        return view("register", ["error" => false]);
    }
}
