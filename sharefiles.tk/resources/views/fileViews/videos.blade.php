@extends('layout')

@section('content')
    <div class="row">
      @foreach ($data as $video)
          <div class="col-sm-6 py-4">
              <div class="card text-white mb-3 dark-color-3">
                  <div class="card-body">
                      <h5 class="card-title">{{ $video->name }}</h5>
                      <p class="card-text">Uploaded by: {{ $video->username }}</p>
                      <div class="col py-4">
                          <video style="max-height: 200px;" width="100%" height="100%" controls>
                                  <source src="/storage/videos/{{ $video->file_name }}" type="video/mp4">
                              Your browser does not support the video tag.
                          </video>
                      </div>
                      <a href="/file/{{ $video->id }}" class="btn dark-color-1 button-fade--white">go to</a>
                  </div>
              </div>
          </div>
      @endforeach
    </div>
@endsection

