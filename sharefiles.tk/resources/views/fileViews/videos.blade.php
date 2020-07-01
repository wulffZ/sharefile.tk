@extends('layout')

@section('content')
    <div class="row">
        <div class="col-sm-12 py-4">
            <div class="card text-white mb-3 dark-color-3">
                <div class="card-body">
                    <h2>Videos cannot be played on these pages anymore, due to high server load. Click on the play icon to play the video</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      @foreach ($data as $video)
          <div class="col-sm-6">
              <div class="card text-white mb-3 dark-color-3">
                  <div class="card-body">
                      <h5 class="card-title">{{ $video->name }}</h5>
                      <p class="card-text">Uploaded by: {{ $video->username }}</p>
                      <a href="/play/{{ $video->id }}" class="btn dark-color-1 button-fade--white">play</a>
                      <a href="/file/{{ $video->id }}" class="btn dark-color-1 button-fade--white">go to </a>
                  </div>
              </div>
          </div>
      @endforeach
    </div>
    <div class="row">
        <div class="col-sm-12 mx-auto">
            {{ $data->links() }}
        </div>
    </div>
@endsection

