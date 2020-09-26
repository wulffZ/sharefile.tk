<?php

namespace App\Http\Controllers;

use App\GuestCode;
use App\User;
use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Auth;

class  FIleController extends Controller
{
    public function index()
    {
        return view('fileViews.home');
    }

    public function videos()
    {
        $data = File::join('users', 'users.id', '=', 'file.user_id')->select('file.*', 'users.username')->where('type', 'video')->orderBy('created_at', 'desc')->simplePaginate(6);
        return view('fileViews.videos', compact('data'));
    }

    public function games()
    {
        $data = File::join('users', 'users.id', '=', 'file.user_id')->select('file.*', 'users.username')->where('type', 'game')->get();
        return view('fileViews.games', compact('data'));
    }

    public function images()
    {
        $data = File::join('users', 'users.id', '=', 'file.user_id')->select('file.*', 'users.username')->where('type', 'image')->get();
        return view('fileViews.images', compact('data'));
    }

    public function other()
    {
        $data = File::join('users', 'users.id', '=', 'file.user_id')->select('file.*', 'users.username')->where('type', 'other')->get();
        return view('fileViews.other', compact('data'));
    }

    public function music()
    {
        $data = File::join('users', 'users.id', '=', 'file.user_id')->select('file.*', 'users.username')->where('type', 'music')->get();
        return view('fileViews.music', compact('data'));
    }

    public function download($id)
    {
        $file = File::find($id);
        if(GuestCode::where('file_id', $id)->first()) {
            try {
                if ($file->type == "image") {
                    return response()->download("storage/images/" . $file->file_name, $file->file_name);
                }
                if ($file->type == "video") {
                    return response()->download("storage/videos/" . $file->file_name, $file->file_name);
                }
                if ($file->type == "game") {
                    return response()->download("storage/games/" . $file->file_name, $file->file_name);
                }
                if ($file->type == "other") {
                    return response()->download("storage/other/" . $file->file_name, $file->file_name);
                }
                if ($file->type == "music") {
                    return response()->download("storage/music/" . $file->file_name, $file->file_name);
                }
            } catch (\Exception $e) {
                return $e;
            }
        } else {
            return redirect('login');
        }
    }

    public function delete($id)
    {
        $file = File::findOrFail($id);
        try {
            if (Auth::user()->id == $file->user_id || Auth::user()->role == "admin") {
                $file->delete();
            } else {
                return "You do not have the permissions to perform this action";
            }

            return redirect('/');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function show($id)
    {
        $file = File::findOrFail($id);
        $user = User::where('id', $file->user_id)->get();
        $file->userdata = $user;
        return view('fileViews.show', compact('file'));
    }

    public function create()
    {
        return view('fileViews.create');
    }

    public function playVideo($id)
    {
        $file = File::findOrFail($id);
        return view('fileViews.play', compact('file'));
    }


}
