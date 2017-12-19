<?php

namespace App\Http\Controllers\Admin;

use App\Admin;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminAuth extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    //use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    public function __contruct()
    {
      $this->middleware('guest:admin', ['except' => ['logout']]);
    }

    public function login(Request $request)
    {
      // if(Auth::guard('admin')->check()){
      //   return redirect('/admin/dashboard');
      // }
      if(Auth::guard('admin')->attempt(['email' => $request['email'], 'password' => $request['password']], $request['remember'])){
        return view('admin.dashboard');
      }
      //return view('admin.login');
      return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
      echo 'Logouta giriyor mu ?';
      if(Auth::guard('admin')->logout()){
        return redirect('/admin/login');
      }
      return redirect('/admin/login');
    }


    public function register(Request $request)
    {
      if(Auth::guard('admin')->check()){
        return redirect('/admin/dashboard');
      }
      $fname =  $request->input('firstname');
      $lname =  $request->input('lastname');
      $email =  $request->input('email');
      $password =  bcrypt($request->input('password'));

      echo 'FNameee : ',$email;
      $admin = new Admin();
      $admin->firstname = $fname;
      $admin->lastname = $lname;
      $admin->email = $email;
      $admin->password = $password;

      $admin->save();

      auth()->login($admin);
      /*
      DB::insert('insert into admins
                      (firstname, lastname, email, password) values (?, ?, ?, ?)',
                      [$fname,$lname,$email,$password]);
                      */


      return view('admin.dashboard', ['admins' => $admin]);
    }


}
