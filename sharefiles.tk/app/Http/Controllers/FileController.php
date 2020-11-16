<?php

namespace App\Http\Controllers;

use App\GuestCode;
use App\Http\Resources\VideoResource;
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
        $data = File::join('users', 'users.id', '=', 'file.user_id')->select('file.*', 'users.username')->where('type', 'video')->where('soft_delete', 'false')->orderBy('created_at', 'desc')->simplePaginate(6);
        $video = VideoResource::collection($data);
        return view('fileViews.videos', compact('video', 'data'));
    }

    public function games()
    {
        $data = File::join('users', 'users.id', '=', 'file.user_id')->select('file.*', 'users.username')->where('type', 'game')->where('soft_delete', 'false')->orderBy('created_at', 'desc')->get();
        return view('fileViews.games', compact('data'));
    }

    public function images()
    {
        $data = File::join('users', 'users.id', '=', 'file.user_id')->select('file.*', 'users.username')->where('type', 'image')->where('soft_delete', 'false')->orderBy('created_at', 'desc')->get();
        return view('fileViews.images', compact('data'));
    }

    public function other()
    {
        $data = File::join('users', 'users.id', '=', 'file.user_id')->select('file.*', 'users.username')->where('type', 'other')->where('soft_delete', 'false')->orderBy('created_at', 'desc')->get();
        return view('fileViews.other', compact('data'));
    }

    public function music()
    {
        $data = File::join('users', 'users.id', '=', 'file.user_id')->select('file.*', 'users.username')->where('type', 'music')->where('soft_delete', 'false')->orderBy('created_at', 'desc')->get();
        return view('fileViews.music', compact('data'));
    }

    public function download($id)
    {
        if (!Auth::check()) {
            if (!GuestCode::where('file_id', $id)->first()) {
                return redirect('/login');
            }
            return redirect('/login');
        }

        $file = File::where('id', $id)->where('soft_delete', 'false')->first();

        switch ($file->type) {
            case "image":
                return response()->download("storage/images/" . $file->file_name, $file->file_name);
            case "video":
                return response()->download("storage/videos/" . $file->file_name, $file->file_name);
            case "game":
                return response()->download("storage/games/" . $file->file_name, $file->file_name);
            case "other":
                return response()->download("storage/other/" . $file->file_name, $file->file_name);
            case "music":
                return response()->download("storage/music/" . $file->file_name, $file->file_name);
        }
    }

    public function delete($id)
    {
        $file = File::findOrFail($id);
        try {
            if (Auth::user()->id == $file->user_id || Auth::user()->role == "admin") {
                $file->soft_delete = true;
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
}
