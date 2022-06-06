<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Http\Request;


class UserController extends Controller
{
    function login(Request $req){
        $user = User::where(['email'=>$req->username])->first();
        if(!$user || !Hash::check($req->password, $user->password)){
            return "User Name and Password not matched";
        }
        else{
            $req->session()->put('user', $user);
            return redirect('admin/dashboard');
            }
        
    }
}
