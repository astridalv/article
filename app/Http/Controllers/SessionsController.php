<?php

namespace App\Http\Controllers;
use Cartalyst\Sentinel\Laravel\Facades\Activation;
use Cartalyst\Sentinel\Laravel\Facades\Reminder;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;
use Session;
use App\Http\Requests\SessionRequest;
//use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function login()
    {
      if ($user = Sentinel::check())
      {
        Session::flash("notice", "You has login ".$user->email);
        return redirect('login');
      }
      else
      {
        return view('sessions.create');
      }
    }
    public function login_store(SessionRequest $request)
      {
        if($user = Sentinel::authenticate($request->all())) {
          Session::flash("notice", "Welcome ".$user->email);
          return redirect()->intended('image');
        } else {
          Session::flash("error", "Login fails");
          return view('sessions.create');
        }
      }

    public function logout() {
      Sentinel::logout();
      Session::flash("notice", "Logout success");
      return redirect('login');
    }
}
