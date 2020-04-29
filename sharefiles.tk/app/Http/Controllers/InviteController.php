<?php

namespace App\Http\Controllers;

use App\InviteCode;
use App\User;
use Auth;
use Illuminate\Http\Request;

class InviteController extends Controller
{
    public function index() {
        return view('invite');
    }

    public function generate(Request $request) {
        $user_id = $request->get('id');
        if(User::where('id', $user_id)->get()) {
            $length = 8;
            $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $code = substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
            $invite_code = new InviteCode();
            $invite_code->user_id = Auth::id();
            $invite_code->code = $code;
            $invite_code->status = "unused";

            $invite_code->save();

            return view('invite', compact('code'));
        }
    }
}
