@extends('layout')

@section('content')
    <div class="row mt-4">
            @foreach ($data as $video)
            <load-video video-id="{{ $video->id }}"
                        video-title="{{ $video->name }}"
                        video-file-name="{{ $video->file_name }}"
                        video-uploader="{{ $video->username }}"
            ></load-video>
            @endforeach
    </div>
    <div class="row">
        <div class="col-sm-12 mx-auto">
            {{ $data->links() }}
        </div>
    </div>
@endsection

