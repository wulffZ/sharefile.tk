@extends('layout')

@section('content')
    <div class="row">
        @foreach ($data as $other)
            <div class="col-sm-6 py-4">
                <div class="card text-white mb-3 dark-color-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $other->name }}</h5>
                        <p class="card-text">Uploaded by: {{ $other->username }}</p>
                        <p class="card-text">No preview available</p>
                        <a href="/file/{{ $other->id }}" class="btn dark-color-1 button-fade--white">go to</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

