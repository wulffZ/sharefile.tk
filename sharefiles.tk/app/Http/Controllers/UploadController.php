<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use Auth;
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
        Artisan::call('source:video', [
            'request' => $request
        ]);
        $current_type = "video";
        return view('fileViews.uploadsucces', ['current_type' => $current_type]);
    }


    public function sourceIsImage($request)
    {
        Artisan::call('source:image', [
            'request' => $request
        ]);
        $current_type = "image";
        return view('fileViews.uploadsucces', ['current_type' => $current_type]);
    }


    public function sourceIsGame($request)
    {
        Artisan::call('source:game', [
            'request' => $request
        ]);
        $current_type = "game";
        return view('fileViews.uploadsucces', ['current_type' => $current_type]);
    }

    public function sourceIsOther($request) {
        Artisan::call('source:other', [
            'request' => $request
        ]);
        $current_type = "other";
        return view('fileViews.uploadsucces', ['current_type' => $current_type]);
    }

    public function sourceIsMusic($request) {
        Artisan::call('source:music', [
            'request' => $request
        ]);
        $current_type = "music";
        return view('fileViews.uploadsucces', ['current_type' => $current_type]);
    }

}

