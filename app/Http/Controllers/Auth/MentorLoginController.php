<?php

namespace App\Http\Controllers\Auth;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mentor_Reg;
use Auth;

class MentorLoginController extends Controller
{
    public function __construct(){
        $this->middleware('guest:mentor');
    }

    public function showSignupForm(){
        return view('auth.mentor-register');
    }

    public function signupFormSubmit(Request $request){

        $this->validate($request, [
            
            'name'=> 'required|string|max:255',
            'department'=> 'required',
            'email'=> 'required|string|email|max:255|unique:users',
            'password'=> 'required|string|min:6|confirmed',
            'password_confirmation'=> 'required',
            'pin'=> 'required|in:nopin',
        ]);

        //storing data
        $mentor_reg = new Mentor_Reg;
        $mentor_reg->name = $request->input('name');
        $mentor_reg->department = $request->input('department');
        $mentor_reg->email = $request->input('email');
        $mentor_reg->password = bcrypt( $request->input('password'));
        $mentor_reg->pin = $request->input('pin');

        $mentor_reg->save();
        return redirect('/mentor');
    }

    public function showLoginForm(){
        return view('auth.mentor-login');
    }

    public function login(Request $request){
        //validate the form data
            $this->validate($request, [
                'email'    => 'required|email',
                'password' => 'required|min:6'
            ]);

        //attemp to log the user in
                if(Auth::guard('mentor')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember)){
                    //if successfull, then redirect to their intended location
                    return redirect()->intended(route('mentor.dashboard'));
                }
                //if not successfull, redirect to the login form with the data
                return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
