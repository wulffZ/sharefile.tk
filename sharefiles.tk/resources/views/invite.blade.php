@extends('layout')

@section('content')
    @if(Auth::user()->role == "admin")
    <div class="row">
        <div class="col dark-color-4 mt-4">
            <form class="my-4 p-4" method="post" action="{{ url('/invite') }}">
                {{ csrf_field() }}
                <div class="form-group text-center">
                    <h1>Here you can generate invite codes that can be used once.</h1>
                    <h4>This measure is to prevent random people from using the website</h4>
                </div>

                @isset($code)
                <div class="form-group text-center py-5">
                    <h1>Your invite code:</h1>
                    <h4>{{ $code }}</h4>
                </div>
                @endisset


                <div class="form-group">
                    <input name="id" class="btn w-0" value="{{ Auth::user()->id }}" style="display:none;">
                    <input type="submit" name="submit" class="btn dark-color-1 button-fade--white" value="Generate" />
                </div>
            </form>
        </div>
    </div>
        @else
        <h1>Fuck off</h1>
    @endif


@endsection

