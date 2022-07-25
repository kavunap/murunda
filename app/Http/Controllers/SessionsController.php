<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create()
    {
        $page_title = 'Page Register';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;
        return view('admin.login',compact('page_title','page_description','action'));
    }
    
    public function store()
    {
        if (auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'The email or password is incorrect, please try again'
            ]);
        }
        
        return redirect()->to('/admin')->with('success','Welcome');
    }
    
    public function destroy()
    {
        auth()->logout();
        
        return redirect()->to('/login')->with('success','Successfully signed out');
    }
    
}
