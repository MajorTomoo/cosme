<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller {
    
   public function postSignup(Request $request){
       
       $email=$request['email'];
       $password=bcrypt($request['password']);
       
       $user=new User();
       $user->email=$email;
       $user->password=$password;
       $user->save();
       
       return redirect()->back();
   } 
   public function postSignin(Request $request){
       
       
       
   }
    
    
}
