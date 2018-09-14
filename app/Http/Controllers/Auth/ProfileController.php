<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use Hash;
use Session;

class ProfileController extends Controller
{
    /**
     *
     * @return view
     */
    public function show()
    {
    	$user_id = Auth::id();
    	$user = User::find($user_id);
        return view('auth.profile', compact('user'));
    }

    /**
     *
     * @return view
     */
    public function edit()
    {
    	$user_id = Auth::id();
    	$user = User::find($user_id);
        return view('auth.editprofile', compact('user'));
    }

    /**
     *
     * @return view
     */
    public function update(Request $request)
    {
    	$this->validate($request, [
            'name' => 'required|max:255',
            'fullname' => 'required|max:255',
            'email' => 'required|email|unique:users,email,'.Auth::id(),
            'password' => 'confirmed',
        ]);

		$input = $request->only('name', 'fullname', 'email', 'password');

    	if ($request->hasFile('photo')) {
    		$this->validate($request, [
		        'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
		    ]);

    		$file = $request->file('photo');        
	        $destination_path = 'uploads/images/';
	        $filename = date("Ymdhis"). "_" . $file->getClientOriginalName();
	        $file->move($destination_path, $filename);
	        $input["photo"] = $destination_path . $filename;
    	}

        if(!empty($input['password'])){
            $input['password'] = Hash::make($input['password']); //update the password
        }else{
            $input = array_except($input,array('password')); //remove password from the input array
        }

        $user_id = Auth::id();
    	$user = User::find($user_id);
        Session::put('UserName', $user->name);
        $user->update($input);

        return view('auth.profile', compact('user'));
    }
}
