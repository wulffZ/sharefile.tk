@extends('layout')

@section('content')
    <div class="row" style="min-height: calc(100vh - 100px);">
        <div class="offset-lg-3 col-lg-6 offset-md-3 col-md-6 col-12 my-auto p-4 dark-color-4">
            <div class="row mb-2">
                <div class="col">
                    <h2 class="text-center">Upload finished</h2>
                </div>
            </div>

            <div class="row mb-2">
                <div class="col">
                    <img style="height: 50px;" class="mx-auto d-block" src="site-used-images/check.png">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p class="text-center">The file has been uploaded, and can now be visited and or downloaded</p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <a href="/" class="btn btn-primary float-right">Back to home</a>
                </div>
            </div>
        </div>
    </div>
@endsection
