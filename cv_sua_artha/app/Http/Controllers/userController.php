<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;

class userController extends Controller
{
    public function index()
    {
        $user = user::paginate(10);
        return view('user',compact('user'));

    }
}
