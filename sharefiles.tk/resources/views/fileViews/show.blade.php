
@extends('layout')

@section('content')
    <div class="row">
        <div class="col py-4">
            <div class="card text-white mb-3 dark-color-3">
                <div class="card-body">
                    <h1 class="card-title">{{ $file->name }}</h1>
                    <p class="card-text">Category: {{ $file->type }}</p>
                    <p class="card-text">Uploaded by: {{ $file->userdata[0]['username'] }}</p>
                    @if($file->type == "image")
                    <img class="img-thumbnail" style="width:100%;"
                         src="/storage/images/{{ $file->file_name }}">
                    @endif
                    @if($file->type == "video")
                    <video width="100%" height="70%" controls>
                            <source src="/storage/videos/{{ $file->file_name }}" type="video/mp4">
                            Your browser does not support the video tag.
                    </video>
                    @endif
                    @if($file->type == "other")
                        <p class="card-text">This file is marked as "other" so there is no preview available</p>
                    @endif
                    @if($file->type == "game")
                        <p class="card-text">This file is marked as "other" so there is no preview available</p>
                    @endif

                    <a class="btn dark-color-1 button-fade--white" href="/file/download/{{ $file->id }}" role="button">Download</a>
                    <a class="btn dark-color-1 button-fade--white" href="/file/delete/{{ $file->id }}" role="button">Delete</a>
                </div>
            </div>
        </div>
    </div>
@endsection
