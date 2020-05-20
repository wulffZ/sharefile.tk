<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>sharefiles</title>

    <!-- Bootstrap -->
    <script src="/packages/js/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <script src="/packages/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/packages/css/bootstrap.css" crossorigin="anonymous">

    <!-- bootstrap toggle -->
    <link href="/packages/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="/packages/js/bootstrap4-toggle.min.js"></script>

    <!-- Axios -->
    <script src="/packages/js/axios.min.js"></script>

    <link href="/style.css" rel="stylesheet">
    <script src="/script.js"></script>
</head>

<body>

<div class="container-fluid px-0 vh-100">
    <div class="w-100 h-100">
        <div class="login-background"></div>
        <div class="h-100 w-100" style="position: absolute; top:0;">
            <div class="row mx-0 h-100">
                <div class="col my-auto mx-auto">
                    <div class="row">
                        <div class="col-12 offset-0 col-md-8 offset-md-2 col-xl-6 offset-xl-3 dark-color-3 p-5">
                            <div class="row pb-4">
                                <div class="col d-flex">
                                    <img src="logo.png" alt="logo" class="mx-auto">
                                </div>
                            </div>

                            <form class="row" method="post" action="{{ url('/login') }}">
                                {{ csrf_field() }}

                                <input type="text" placeholder="Username" name="username" class="form-control form-control-lg dark-color-4 my-3" />
                                <input type="password" placeholder="Password" name="password" class="form-control form-control-lg dark-color-4 my-3" />


                                <div class="col-12 px-0 text-center">
                                    <span style="color: red;">{{ Session::get('error') }}</span>
                                    @foreach($errors->all() as $error)
                                        <span style="color: red;">{{ $error }}</span><br/>
                                    @endforeach
                                </div>

                                <input type="submit" name="login" class="btn btn-primary btn-lg btn--no-border-radius my-3 mt-4 w-100" value="LOGIN" />
                            </form>

                            <div class="row">
                                <div class="col px-0 mt-4 text-center">
                                    <span>Don't have an account yet? <a href="/register" >Register here</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>


{{--    <div class="row">--}}
{{--        <div class="col dark-color-4 mt-4">--}}
{{--            <form class="my-4 p-4" method="post" action="{{ url('/login') }}">--}}
{{--                {{ csrf_field() }}--}}
{{--                <div class="form-group text-center">--}}
{{--                    <h1>Welcome (back) to sharesauce!</h1>--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label>Enter username</label>--}}
{{--                    <input type="text" name="username" class="form-control dark-color-3" />--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label>Enter password</label>--}}
{{--                    <input type="password" name="password" class="form-control dark-color-3" />--}}
{{--                    <input type="submit" style="display: none" />--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <label>If you are registering here for the first time, enter your access code here.</label>--}}
{{--                    <input type="password" name="access_code" class="form-control dark-color-3" />--}}
{{--                </div>--}}

{{--                <div class="form-group">--}}
{{--                    <input type="submit" class="btn w-0" value="" disabled>--}}
{{--                    <input type="submit" name="login" class="btn btn-primary float-right" value="Login" />--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
