@extends('layout')

@section('content')
    <div class="row mt-4">
            @foreach ($video as $video_item)
            <load-video :video-data="{{ json_encode($video_item) }}"

            ></load-video>
            @endforeach
    </div>
    <div class="row">
        <div class="col-sm-12 mx-auto">
            {{ $data->links() }}
        </div>
    </div>
@endsection

