@extends('layout')

@section('content')
    <div class="row py-4">
        @foreach ($data as $music)
            <div class="col-sm-6">
                <div class="card text-white mb-3 dark-color-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $music->name }}</h5>
                        <p class="card-text">Uploaded by: {{ $music->username }}</p>
                        <div class="col py-4">
                            <audio style="width: 100%;" controls>
                                <source src="horse.mp3" type="audio/mpeg">
                                <source src="/storage/music/{{ $music->file_name }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                        <a href="/file/{{ $music->id }}" class="btn dark-color-1 button-fade--white">go to</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

