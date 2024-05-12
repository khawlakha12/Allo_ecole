<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function userlogged()
    {
        $user = Auth::user(); 
        return view('Admin.profile', compact('user')); 
    }
}
