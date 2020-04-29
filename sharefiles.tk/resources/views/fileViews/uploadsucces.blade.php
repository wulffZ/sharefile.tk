@extends('layout')

@section('content')
    <div class="row" style="min-height: calc(100vh - 100px);">
        <div class="offset-lg-3 col-lg-6 offset-md-3 col-md-6 col-12 my-auto p-4 dark-color-4">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h2 style="text-align: center;" class="text-center">upload finished</h2>
                </div>
            </div>

            @if($current_type == "image")
                <div class="row">
                    <div class="col">
                        <img class="img-thumbnail" src="{{ asset($path) }}">
                    </div>
                </div>
                <div class="row">
                    <div class="col mt-4">
                        <p class="text-center">The image has been uploaded, and can now be visited and or downloaded</p>
                    </div>
                </div>
            @endif

            @if($current_type == "video")
                <div class="row">
                    <div class="col">
                        <p class="text-center">The video has been uploaded, and can now be visited <a>here<a> and or downloaded</p>
                    </div>
                </div>
            @endif

            @if($current_type == "game")
                <div class="row">
                    <div class="col">
                        <p class="text-center">The game has been uploaded, and can now be visited <a>here<a> and or downloaded</p>
                    </div>
                </div>
            @endif


            <div class="row">
                <div class="col">
                    <a href="/file/{{ $data->id }}" class="btn dark-color-1 button-fade--white float-right">See file</a>
                </div>
            </div>
        </div>
    </div>
@endsection
