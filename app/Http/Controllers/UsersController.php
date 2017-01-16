<?php
namespace App\Http\Controllers;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
//use Sentinel;
use App\User;
use App\Http\Requests\UserRequest;
use Session;
//use Illuminate\Http\Request;

class UsersController extends Controller
{
      public function signup()
      {
       return view('users.signup');
      }

      public function signup_store(UserRequest $request)
      {
      //dd($request->email);
        $sign = [
          'email' => $request->email,
          'password' => $request->password,
          'first_name' => $request->first_name,
          'last_name' => $request->last_name,

        ];

        $writeruser=Sentinel::registerAndActivate($sign);
        $writerrole = Sentinel::findRoleByName('Writer');
        $writeruser->roles()->attach($writerrole);
        Session::flash('notice', 'Success create new user');
        return redirect()->back();
      }
}
