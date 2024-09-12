<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
 public function registeruser(Request $request)
    {
        // Validation rules
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'email'=>'required|email',
            'password' => 'required',
        ]);
    // Check if validation fails
    // if ($validator->fails()) {
    //     return redirect()->back()->withErrors($validator)->withInput();
    // }

    // If validation passes, create the new record
    Register::create([
        'username' => $request->input('username'),
        'email' => $request->input('email'),
        'password' => bcrypt($request->input('password')), // Encrypt password
    ]);

    // Redirect or respond as needed
    return redirect()->route('/')->with('/', 'User registered successfully');

}

}
