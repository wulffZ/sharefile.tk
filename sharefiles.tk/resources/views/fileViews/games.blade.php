@extends('layout')

@section('content')
    <div class="row py-4">
    @foreach ($data as $game)
            <div class="col-sm-6">
                <div class="card text-white mb-3 dark-color-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $game->name }}</h5>
                        <p class="card-text">Uploaded by: {{ $game->username }}</p>
                        <p class="card-text">No preview available</p>
                        <a href="{{ route('file', ['id' => $game->id])}}" class="btn dark-color-1 button-fade--white">go to</a>
                    </div>
                </div>
            </div>
    @endforeach
    </div>
@endsection

