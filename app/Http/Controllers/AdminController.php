<?php

namespace App\Http\Controllers;
use DB;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(){
        // dd('login');
    return view('admin/login');
    }
      public function check(Request $req){
        $email = $req['email'];
        $password= $req['password'];
       
        $user = DB::table('users')->where('email',$email)->where('password',$password)->first();
        if($user){
             Session::put('admin', 'admin');
               return redirect('admin')->with('status', 'Login Successful');
        }else{
              return redirect('admin/login')->with('error', 'Check your Email & Password');
        }
      }
      public function admin(){
        // dd('fkfk');
         return view('admin.dashbord');
      }
         public function profile(){
        // dd('fkfk');
         return view('admin.profile');
      }
      public function logout(){
        // dd('dd');
        session::flush();
        return redirect('admin/login');
      }
}