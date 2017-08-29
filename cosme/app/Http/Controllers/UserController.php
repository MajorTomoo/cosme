<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller {
    public function getDashboard(){
        
        return view('dashboard');
    }
   public function postSignup(Request $request){
       $this->validate($request,[
           'email'=>'email|unique:users',
           'password'=>'required|min:6',
           'verifypassword'=>'required'
           
       ]);
       $email=$request['email'];
       $password=bcrypt($request['password']);
       
       $user=new User();
       $user->email=$email;
       $user->password=$password;
       $user->save();
       
       return redirect()->route('dashboard');
   } 
   public function postSignin(Request $request){
       $this->validate($request,[
           'email'=>'required',
           'password'=>'required'
       ]);
       if(Auth::attempt(['email'=>$request['email'],'password'=>$request['password']])){
           
           return redirect()->route('home');
           
       }
      return redirect()->back();
       
   }    
    public function getLogOut(){
        
       Auth::logout();
       return redirect()->route('home');
        
    }
    public function getHome(){
        
       return view('welcome'); 
    }
}
