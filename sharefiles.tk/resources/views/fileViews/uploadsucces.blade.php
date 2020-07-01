@extends('layout')

@section('content')
    <div class="row" style="min-height: calc(100vh - 100px);">
        <div class="offset-lg-3 col-lg-6 offset-md-3 col-md-6 col-12 my-auto p-4 dark-color-4">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h2 style="text-align: center;" class="text-center">Upload finished</h2>
                </div>
            </div>

            @if($current_type == "image")
                <div class="row">
                    <div class="col mt-4">
                        <p class="text-center">The image has been uploaded. You can now leave this page.</p>
                    </div>
                </div>
            @endif

            @if($current_type == "video")
                <div class="row">
                    <div class="col">
                        <p class="text-center">The video has been uploaded. You can now leave this page.</p>
                    </div>
                </div>
            @endif

            @if($current_type == "game")
                <div class="row">
                    <div class="col">
                        <p class="text-center">The game has been uploaded. You can now leave this page.</p>
                    </div>
                </div>
            @endif

            @if($current_type == "other")
                <div class="row">
                    <div class="col">
                        <p class="text-center">The file has been uploaded. You can now leave this page.</p>
                    </div>
                </div>
            @endif

            @if($current_type == "music")
                <div class="row">
                    <div class="col">
                        <p class="text-center">The music is being uploaded. You can now leave this page.</p>
                    </div>
                </div>
            @endif


        </div>
    </div>
@endsection
