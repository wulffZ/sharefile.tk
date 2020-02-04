<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Auth;

class FIleController extends Controller
{
    public function index() {
        return view('fileViews.home');
    }

    public function create() {
        return view('fileViews.create');
    }

    public function getRecentFiles() {
        $user_id = Auth::id();
        $recentFiles = File::where('user_id', $user_id)->orderby('created_at','desc')->get();
    }
}
