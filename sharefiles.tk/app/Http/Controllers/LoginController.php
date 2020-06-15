<?php

namespace App\Http\Controllers;

use App\InviteCode;
use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\In;
use mysql_xdevapi\Exception;
use Validator;
use App\User;
use App\Settings;


class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $username = $request->get('username');
        $password = $request->get('username');

        if ($username == null) {
            return back()->with('error', 'Please enter a username');
        }

        if ($password == null) {
            return back()->with('error', 'Please enter a password');
        }

        if (User::where('username', '=', $username)->exists()) {
            $this->validate($request, [
                'username' => 'required',
                'password' => 'required'
            ]);

            $user_data = array(
                'username' => $request->get('username'),
                'password' => $request->get('password')
            );

            if (Auth::attempt($user_data)) {
                return redirect('/');
            }
        }
    }

    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $request)
    {
        // fill all vars
        $username = $request->get('username');
        $password = $request->get('password');
        $invite_code = $request->get('invite_code');
        // check if all vars are sent / filled
        if(User::where('username', '=', $username)->exists()) {
            return back()->with('error', 'Username invalid. User with that name already exists.');
        }
        if ($invite_code == null) {
            return back()->with('error', 'Please enter an invite code');
        }
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
            'invite_code' => 'required',
        ]);

        $dbcode = InviteCode::where('code', $invite_code)->where('status', 'unused')->first();
        if(is_null($dbcode)) {
            return back()->with('error', 'Invalid code or already used');
        }

        $user = new User();
        $user->role = 'user';
        $user->username = $username;
        $user->password = Hash::make($password);
        $user->state = "active";

        $user->save();

        // now mark the code as used

        $dbcode->status = "used";
        $dbcode->save();

        // now log them in

        $user_data = array(
            'username' => $username,
            'password' => $password
        );

        if (Auth::attempt($user_data)) {
            return redirect('/');
        } else {
            return back()->with('error', 'Something went wrong.');
        }

    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
