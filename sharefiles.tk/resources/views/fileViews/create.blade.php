@extends('layout')

@section('content')

    <div class="row">
        <div class="col my-4 p-4 dark-color-4">
            <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data" class="disabled-textbox-form">
                {{ csrf_field() }}

                <div class="form-group text-center">
                    <input type="hidden" name="type" value="{{ app('request')->input('type') }}">
                    <h1>Uploading: {{ app('request')->input('type') }}</h1>
                </div>


                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" id="name" placeholder="Name" class="form-control dark-color-3" />
                </div>

                @if (app('request')->input('type') == "image")
                    <div class="form-group">
                        <label>The image</label>
                        <input type="file" onchange="setPreview(this);" name="image" class="form-control dark-color-3 p-1">
                        <div class="row col-12 d-flex justify-content-center">
                            <img id="imagePreview" class="mw-100 mt-2" src="site-used-images/empty.png">
                        </div>
                    </div>
                @endif

                @if (app('request')->input('type') == "video" || app('request')->input('type') == "other" )
                    <div class="form-group">
                        <label>File</label>
                        <input type="file" name="file" class="form-control dark-color-3 p-1">
                    </div>
                @endif

                @if (app('request')->input('type') == "music")
                    <div class="form-group">
                        <label>File</label>
                        <input type="file" name="file" class="form-control dark-color-3 p-1">
                    </div>
                @endif

                @if(app('request')->input('type') == "game")
                    <div class="form-group">
                        <label>File (preferably a zip or a rar for large games)</label>
                        <input type="file" name="file" class="form-control dark-color-3 p-1">
                    </div>
                @endif

                <input type="hidden" id="formHiddenCover" name="coverUrl" value="">

                <div class="form-group">
                    <button class="btn dark-color-1 button-fade--white float-right" type="submit">upload</button>
                </div>
            </form>
        </div>
    </div>

@endsection
