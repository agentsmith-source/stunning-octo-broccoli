<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserWebController extends Controller




{
public function users() {
    return view('users', ["igraci" => User::all()]);
}
public function storeUser() {
    return view ("register");
}
public function store()
{
    $this->validate(request(), [
        'ime' => 'required|string|max:128',
        'prezime' => 'required',
        'email' => 'required|email',
        'password' => 'required'
    ]);}
public function create()
{
    $user = User::create([
        'ime' => request(['ime']),
        'prezime' => request('prezime'),
        'email' => request('email'),
        'password' => request('password')
    ]);
   // $user = User::storeUser(request(['ime','prezime','email', 'password']));
     
    //auth()->login($user);*/

    return redirect()->to('/'); 
}
        
    
   

}         
