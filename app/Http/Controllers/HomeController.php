<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        return view('web.home');
    }

    public function dashboard(){
        $users = User::all();
        $doctors = User::where('title', 'doctor');
        
        return view('admin.dashboard', compact('users','doctors'));
    }
}
