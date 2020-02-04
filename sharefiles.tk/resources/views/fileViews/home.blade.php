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

    <div class="container">
        <div class="row dark-color-4 py-4 mt-4">
            <div class="col-md-3 h-100">
                <div class="row">
                    <div class="col">
                        <h1 class="catagory-headers">Zip files</h1>
                    </div>
                </div>
                <div class="row h-100 py-2">
                    <div class="col h-100 d-flex">
                        <img class="w-50 mx-auto my-auto"
                             src="site-used-images/winrar-logo.png">
                    </div>
                </div>
            </div>
            <div class="col-md-3 h-100">
                <div>
                    <h1 class="catagory-headers">Games</h1>
                </div>
                <div class="row h-100 py-2">
                    <div class="col h-100 d-flex">
                        <img class="w-50 mx-auto my-auto"
                         src="site-used-images/game-logo.png">
                    </div>
                </div>
            </div>
            <div class="col-md-3 h-100">
                <div>
                    <h1 class="catagory-headers">Images</h1>
                </div>
                <div class="row h-100 py-2">
                    <div class="col h-100 d-flex">
                        <img class="w-50 mx-auto my-auto"
                         src="site-used-images/image-logo.png">
                    </div>
                </div>
            </div>
            <div class="col-md-3 h-100">
                <div>
                    <h1 class="catagory-headers">Other</h1>
                </div>
                <div class="row h-100 py-2">
                    <div class="col h-100 d-flex">
                        <img class="w-50 mx-auto my-auto"
                         src="site-used-images/other-logo.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">

        </div>
    </div>

@endsection
