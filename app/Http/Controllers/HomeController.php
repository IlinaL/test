<?php

namespace App\Http\Controllers;
use App\Models\User;

class HomeController extends Controller
{
   public function home(){
       $users = User::select('id','name','email','user_type')->get();
       return view('home',['users'=>$users]);
   }
}