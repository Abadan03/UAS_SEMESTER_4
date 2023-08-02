<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Imports\LaporanImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
use App\Models\insertHandler;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use File;
use Auth;
use Redirect;

class UserLoginController extends Controller
{
  public function login(){
    return view('auth.loginpage');
  }

  public function postlogin(Request $request)
  {
    // echo $request->email;
    // echo "<br>";
    // echo $request->password;
    // exit;
    if (Auth::attempt($request->only('email','password'))) 
    {
      $email = $request->email;
      Session::put('email', $email);
      $usermail = Session::get('email');
      $role = User::where('email', $usermail)->pluck('role');
      echo "<script> console.log(".$role.")</script>";
      Session::put('role', $role);
      return redirect('/home');
    }
    else
    {
      echo '<script>';
      echo 'alert("Username dan Password Tidak Cocok");';
      echo 'window.location.href = "/login";';
      echo '</script>';    
    }
  }

  public function logout(){
    Auth::logout();
    return redirect('/login');
  }
}
