<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index () {
        return view("users", ["users" => User::all()]);
    }

    public function delete ($id) {
        $user = User::where('id', $id)
        ->first();
        $user->delete();

        return redirect('/users')->with('msg', 'User '.$user->name.' deleted.');
    }

    public function edit ($id) {
        $userData = User::where('id', $id)
        ->first();
        return view("edit", compact('userData'));
    }
    public function update (Request $request, $id) {
        $sentData = $request->only(["name","email"]);
        $userData = User::where('id', $id)
            ->first();
        $userData->name = $sentData['name'];
        $userData->email = $sentData['email'];
        $userData->save();
       
        return redirect('/users')->with('msg', 'User '.$userData->name.' updated.');
    }

   
}
