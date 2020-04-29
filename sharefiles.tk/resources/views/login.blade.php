@extends('headernoitems')

@section('content')

    @if(isset(Auth::user()->username))
        <script>window.location="/";</script>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $message }}</strong>
            <button type="button" class="close" data-dismiss="alert">×</button>
        </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col dark-color-4 mt-4">
            <form class="my-4 p-4" method="post" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group text-center">
                    <h1>Welcome to sharefiles!</h1>
                    <h4>It's like sharesauce, but for files.</h4>
                </div>

                <div class="form-group">
                    <label>Enter username</label>
                    <input type="text" name="username" class="form-control dark-color-3" />
                </div>

                <div class="form-group">
                    <label>Enter password</label>
                    <input type="password" name="password" class="form-control dark-color-3" />
                    <input type="submit" style="display: none" />
                </div>

                <div class="form-group">
                    <input type="submit" class="btn w-0" value="" disabled>
                    <div class="float-left">
                        <a href="/register"class="btn dark-color-1 button-fade--white">register</a>
                    </div>
                    <input type="submit" name="login" class="btn dark-color-1 button-fade--white float-right" value="login" />
                </div>
            </form>
        </div>
    </div>

@endsection

