<?php

namespace App\Http\Controllers;

use App\Library\GenerateName;
use Illuminate\Http\Request;
use App\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;


class UploadController extends Controller
{
    public function determineType()
    {
        if (request('type') == "video") {
            return $this->sourceIsVideo(request());
        } elseif (request('type') == "game") {
            return $this->sourceIsGame(request());
        } elseif (request('type') == "image") {
            return $this->sourceIsImage(request());
        } elseif (request('type') == "other") {
            return $this->sourceIsOther(request());
        } elseif (request('type') == "music") {
            return $this->sourceIsMusic(request());
        }
    }

    public function sourceIsVideo($request)
    {
        $request->all();

        $video = $request->file('file');

        $fileExtention = $video->getClientOriginalExtension();

        $file_name = GenerateName::GenerateName();
        try {
            $file = new File();
            $file->user_id = \Illuminate\Support\Facades\Auth::id();
            $file->name = $request->name;
            $file->file_name = "$file_name" . "." . "$fileExtention";
            $file->type = $request->type;
            $file->soft_delete = "false";

            $file->save();

            $video->storeAs('/videos', $file->file_name, 'public');
        } catch (\Exception $e) {
            return $e;
        }
        $current_type = "video";
        return view('fileViews.uploadsucces', ['current_type' => $current_type]);
    }


    public function sourceIsImage($request)
    {
        $image = $request->image;

        $fileExtention = $image->getClientOriginalExtension();

        $file_name = GenerateName::GenerateName();
        try {
            $file = new File();
            $file->user_id = \Illuminate\Support\Facades\Auth::id();
            $file->name = $request->name;
            $file->file_name = "$file_name" . "." . "$fileExtention";
            $file->type = $request->type;
            $file->soft_delete = "false";

            $file->save();

            $image->storeAs('/images', $file->file_name, 'public');
        } catch (\Exception $e) {
            return $e;
        }
        $current_type = "image";
        return view('fileViews.uploadsucces', ['current_type' => $current_type]);
    }


    public function sourceIsGame($request)
    {
        $game = $request->file;

        $fileExtention = $game->getClientOriginalExtension();

        $file_name = GenerateName::GenerateName();
        try {
            $file = new File();
            $file->user_id = \Illuminate\Support\Facades\Auth::id();
            $file->name = $request->name;
            $file->file_name = "$file_name" . "." . "$fileExtention";
            $file->type = $request->type;
            $file->soft_delete = "false";

            $file->save();

            $game->storeAs('/games', $file->file_name, 'public');
        } catch (\Exception $e) {
            return $e;
        };
        $current_type = "game";
        return view('fileViews.uploadsucces', ['current_type' => $current_type]);
    }

    public function sourceIsOther($request)
    {
        $other = $request->file;

        $fileExtention = $other->getClientOriginalExtension();

        $file_name = GenerateName::GenerateName();
        try {
            $file = new File();
            $file->user_id = Auth::id();
            $file->name = $request->name;
            $file->file_name = "$file_name" . "." . "$fileExtention";
            $file->type = $request->type;
            $file->soft_delete = "false";

            $file->save();

            $other->storeAs('/other', $file->file_name, 'public');
        } catch (\Exception $e) {
            return $e;
        }
        $current_type = "other";
        return view('fileViews.uploadsucces', ['current_type' => $current_type]);
    }

    public function sourceIsMusic($request)
    {
        $music = $request->file;

        $fileExtention = $music->getClientOriginalExtension();

        $file_name = GenerateName::GenerateName();
        try {
            $file = new File();
            $file->user_id = Auth::id();
            $file->name = $request->name;
            $file->file_name = "$file_name" . "." . "$fileExtention";
            $file->type = $request->type;
            $file->soft_delete = "false";

            $file->save();

            $music->storeAs('/music', $file->file_name, 'public');
        } catch (\Exception $e) {
            return $e;
        }
        $current_type = "music";
        return view('fileViews.uploadsucces', ['current_type' => $current_type]);
    }

}

