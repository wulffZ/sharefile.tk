<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Auth;
use Illuminate\Support\Facades\Storage;


class UploadController extends Controller
{
    public function determineType()
    {
        if (request('type') == "zip") {
            return $this->sourceIsZip(request());
        } elseif (request('type') == "game") {
            return $this->sourceIsGame(request());
        } elseif (request('type') == "image") {
            return $this->sourceIsImage(request());
        } elseif (request('type') == "other") {
            return $this->sourceIsOther(request());
        }
    }

    public function sourceIsZip($request)
    {
        $zip = $request->file;

        $fileExtention = $zip->getClientOriginalExtension();

        $file_name = $this->generateName();
        try {
            $file = new File();
            $file->user_id = Auth::id();
            $file->name = $request->name;
            $file->file_name = "$file_name" . "." . "$fileExtention";
            $file->type = $request->type;
            $file->soft_delete = "false";

            $file->save();

            $zip->storeAs('zips', $file->file_name, 'public');

            $current_type = "zip";

            return view('fileViews.uploadsucces', ['current_type' => $current_type]);
        } catch (\Exception $e) {
            return $e;
        }
    }


    public function sourceIsGame($request)
    {
        $game = $request->file;

        $fileExtention = $game->getClientOriginalExtension();

        $file_name = $this->generateName();
        try {
            $file = new File();
            $file->user_id = Auth::id();
            $file->name = $request->name;
            $file->file_name = "$file_name" . "." . "$fileExtention";
            $file->type = $request->type;
            $file->soft_delete = "false";

            $file->save();

            Storage::disk('public')->put('games/', $game);

            $current_type = "game";

            return view('fileViews.uploadsucces', ['current_type' => $current_type]);
        } catch (\Exception $e) {
            return $e;
        }
    }


    public function sourceIsImage($request)
    {
        $image = $request->image;

        $fileExtention = $image->getClientOriginalExtension();

        $file_name = $this->generateName();
        try {
            $file = new File();
            $file->user_id = Auth::id();
            $file->name = $request->name;
            $file->file_name = "$file_name" . "." . "$fileExtention";
            $file->type = $request->type;
            $file->soft_delete = "false";

            $file->save();

            $image->storeAs('images', $file->file_name, 'public');

            $path = Storage::url('images/' . $file->file_name);

            $current_type = "image";


            return view('fileViews.uploadsucces', ['current_type' => $current_type, 'path' => $path]);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function generateName()
    {
        $imageName = strval(microtime());
        $imageName = str_replace(' ', '', $imageName);
        $imageName = str_replace('0.', '', $imageName);
        return $imageName;
    }
}

