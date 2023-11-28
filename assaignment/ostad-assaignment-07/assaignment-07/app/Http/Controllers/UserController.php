<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   function userscontrol(){
    return view("userinformation");
   }
}
