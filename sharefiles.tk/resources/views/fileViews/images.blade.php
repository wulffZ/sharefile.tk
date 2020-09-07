@extends('layout')

@section('content')
    <div class="row">
        @foreach ($data as $image)
            <div class="col-sm-6 py-4">
                <div class="card text-white mb-3 dark-color-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $image->name }}</h5>
                        <p class="card-text">Uploaded by: {{ $image->username }}</p>
                        <a href="/file/{{ $image->id }}" class="btn dark-color-1 button-fade--white">go to</a>
                        <div class="col py-4">
                            <img class="img-thumbnail" style="width:100%;"
                                 src="/storage/images/{{ $image->file_name }}">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

