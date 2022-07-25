<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::latest()->paginate(5);

        return view('registration.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_title = 'Page Register';
        $page_description = 'Some description for the page';
		
		$action = __FUNCTION__;
        $departments = Department::all()->sortByDesc('title')->pluck('title', 'id');
        return view('admin.register',compact('action','page_description','page_title','departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'user_role'=>'required',
            'title'=>'required',
            'phone'=>'required',
            'prefix'=>'required',
            'qualifications'=>'required',
            'image'=>'required | image | mimes:jpeg,png,jpg,gif,svg,tiff | max:2048',
            'signature'=>'required',
            'department_id'=>'required',
            'email' => 'required|email|unique:users,email,$this->id,id',
            'password' => 'required|confirmed'
        ]);

        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'image/profiles';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = "$profileImage";
        }
        // Customer::create($input);
        if ($signature = $request->file('signature')) {
            $destinationPath = 'image/signatures';
            $profileImage = "signature" . date('YmdHis') . "." . $signature->getClientOriginalExtension();
            $signature->move($destinationPath, $profileImage);
            $input['signature'] = "$profileImage";
        }
        if ($stamp = $request->file('stamp')) {
            $destinationPath = 'image/stamps/';
            $profileImage = date('YmdHis') . "." . $stamp->getClientOriginalExtension();
            $stamp->move($destinationPath, $profileImage);
            $input['stamp'] = "$profileImage";
        }
        $user = User::create($input);

        auth()->login($user);

        return redirect()->to('/admin')->with('success', 'Successfully registered. Sign In to continue');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('registration.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);
        $user->name = request('name');
        $user->email = request('email');
        $user->password = request('password');

        $user->save();
        
        return redirect()->route('home')
                        ->with('success','Your account updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('registration.index')
                        ->with('success','User deleted successfully');
    }
}
