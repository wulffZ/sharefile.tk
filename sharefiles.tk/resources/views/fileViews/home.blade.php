@extends('layout')

@section('content')
    <style>
        .image {
            width: 100%;
            padding: 10px;
        }

        .catagory-headers {
            text-align: center;
        }
    </style>

        <div class="row">
            <div class="col py-4">
                <div class="card text-white mb-3 dark-color-3">
                    <div class="card-body">
                        <h5 class="card-title">video's</h5>
                        <p class="card-text">in this catogory you will find video's</p>
                        <a href="/videos" class="btn dark-color-1 button-fade--white">go to</a>
                        <a href="/create?type=video" class="btn dark-color-1 button-fade--white">upload a video</a>
                    </div>
                </div>
            </div>
            <div class="col py-4">
                <div class="card text-white mb-3 dark-color-3">
                    <div class="card-body">
                        <h5 class="card-title">games</h5>
                        <p class="card-text">in this catogory you will find games.</p>
                        <a href="/games" class="btn dark-color-1 button-fade--white">go to</a>
                        <a href="/create?type=game" class="btn dark-color-1 button-fade--white">upload a game</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card text-white mb-3 dark-color-3">
                    <div class="card-body">
                        <h5 class="card-title">images</h5>
                        <p class="card-text">in this catogory you will find images.</p>
                        <a href="/images" class="btn dark-color-1 button-fade--white">go to</a>
                        <a href="/create?type=image" class="btn dark-color-1 button-fade--white">upload an image</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white mb-3 dark-color-3">
                    <div class="card-body">
                        <h5 class="card-title">other</h5>
                        <p class="card-text">in this catogory you will find files marked as other</p>
                        <a href="/other" class="btn dark-color-1 button-fade--white">go to</a>
                        <a href="/create?type=other" class="btn dark-color-1 button-fade--white">upload a file</a>
                    </div>
                </div>
            </div>
        </div>

@endsection
