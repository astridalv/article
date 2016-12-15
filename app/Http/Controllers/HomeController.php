<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
      return view('homes.index');
    }
    public function profile($id_org){
      
      return view('homes.profile')->with("id",$id_org);

    }
    public function contact(){
      return view('homes.contact');
    }
    public function contact_submit(Request $request){

    }
}
