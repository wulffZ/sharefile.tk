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
        <div class="row">
            <div class="col-md-3 dark-color-4 mt-3">
                <div>
                    <h1 class="catagory-headers">Zip files</h1>
                </div>
                <div class="content-div">
                    <img class="image"
                         src="site-used-images/winrar-logo.png">
                    <br>
                </div>
            </div>
            <div class="col-md-3 dark-color-4 mt-3">
                <div>
                    <h1 class="catagory-headers">Games</h1>
                </div>
                <div  class="content-div">
                    <img class="image"
                         src="site-used-images/game-logo.png">
                    <br>
                </div>
            </div>
            <div class="col-md-3 dark-color-4 mt-3">
                <div>
                    <h1 class="catagory-headers">Images</h1>
                </div>
                <div  class="content-div">
                    <img class="image"
                         src="site-used-images/image-logo.png">
                    <br>
                </div>
            </div>
            <div class="col-md-3 dark-color-4 mt-3">
                <div>
                    <h1 class="catagory-headers">Other</h1>
                </div>
                <div  class="content-div">
                    <img class="image"
                         src="site-used-images/other-logo.png">
                    <br>
                </div>
            </div>
        </div>

        <div class="row">

        </div>
    </div>

@endsection
