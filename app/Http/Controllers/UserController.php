<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
      public function login(Request $req)
      {
          
           $req->validate([
            'email'=>'required',
            'password'=>'required'
           ]);
           
           $user=User::where(['email'=>$req->email])->first();
              if(!$user || !Hash::check($req->password, $user->password))
              {
                
                return "not";
              }
              else
              {
                $req->session()->put('user',$user);
                  return "yes";
              }
            
      }
}
