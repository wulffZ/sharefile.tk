<?php

namespace App\Http\Controllers;

use Facade\Ignition\Support\Packagist\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use mysql_xdevapi\Exception;
use Validator;
use Auth;
use App\User;
use App\Settings;


class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function checklogin(Request $request)
    {
        $access_code = "memebros2020";

        $user = $request->get('username');
        if (User::where('username', '=', $user)->exists()) {
            $this->validate($request, [
                'username'   => 'required',
                'password'  => 'required'
            ]);

            $user_data = array(
                'username'  => $request->get('username'),
                'password' => $request->get('password')
            );

            if (Auth::attempt($user_data)) {
                //
                $userBanned = $this->checkIfBanned(Auth::id());
                if ($userBanned == false) {
                    session_start();
                    if(isset($_SESSION['redirectUrl'])) {
                        return redirect($_SESSION['redirectUrl']);
                    }
                    return redirect('/');
                } else {
                    Auth::logout();
                    return back()->with('error', 'You are banned from visiting sharesauce');
                }
            } else {
                return back()->with('error', 'Wrong Login Details');
            }
        } else {
            if ($request->get('access_code') != null) {
                $access_code = $request->get('access_code');
                if ($access_code == $access_code) {
                    $this->validate($request, [
                        'username'   => 'required',
                        'password'  => 'required'
                    ]);

                    $user = new User();

                    $user->username = $request->get('username');
                    $user->password = Hash::make($request->get('password'));
                    $user->state = "active";

                    if ($user->save()) {
                        $user_data = array(
                            'username'  => $request->get('username'),
                            'password' => $request->get('password'),
                        );

                        if (Auth::attempt($user_data)) {
                            return redirect('/');
                        } else {
                            return back()->with('error', 'Wrong Login Details');
                        }
                    }
                } else {
                    return back()->with('error', 'Incorrect access code');
                }
            } else {
                return back()->with('error', 'Please enter access code.');
            }
        }


    }

    public function checkIfBanned($user_id) {
        $user = User::findorfail($user_id);

        if($user->state == "banned") {
            return true;
        }
        if($user->state == "active") {
            return false;
        }
    }

    function successlogin()
    {
        return view('successlogin');
    }

    function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
