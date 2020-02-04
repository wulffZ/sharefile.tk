<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Sharesauce</title>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css" crossorigin="anonymous">

    <!-- bootstrap toggle -->
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

    <!-- Axios -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <link href="/style.css" rel="stylesheet">
    <script src="/script.js"></script>
</head>

<body>

<div class="d-none d-lg-block">
    <div class="dark-color-1">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="/">sharefiles</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle py-0 px-3" id="navbar--user" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">{{ Auth::user()->username }}</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="http://wanwan-html5.moe/#Karen">Profile</a>
                            <a class="dropdown-item" href="/logout">Logout</a>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="dark-color-3">
        <div class="container">
            <div class="navbar navbar-expand-lg navbar-dark dark-color-3">
                <div class="collapse navbar-collapse" id="basicExampleNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link pl-0 py-0" href="/zip">Zip</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link py-0" href="/games">Games</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link py-0" href="/images">Images</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link py-0" href="/other">Other</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle py-0" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Upload</a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/create?type=zip">Zip</a>
                                <a class="dropdown-item" href="/create?type=game">Games</a>
                                <a class="dropdown-item" href="/create?type=image">Image</a>
                                <a class="dropdown-item" href="/create?type=other">Other</a>
                            </div>
                        </li>
                    </ul>

                    <form class="form-inline" action="/search">
                        <div class="form-group d-flex my-0">
                            <input type="text" name="search" class="dark-color-3 search--input" placeholder="Search" aria-label="Search">
                            <button class="btn py-0 search--button h-100" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="my-auto" style="height: 12px; fill: white;">
                                    <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="d-block d-lg-none">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="/" style="font-size: 3rem;">sharesauce</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" onclick="showMobileNavigation()">
            <span class="navbar-toggler-icon" style="font-size: 3rem;"></span>
        </button>

        <div id="mobileNav" class="overlay dark-color-3">

            <div class="row h-100">
                <div class="col-2 dark-color-2">
                    <a onclick="hideMobileNavigation()" id="closeButton">&times;</a>
                </div>

                <div class="col-10 my-auto">
                    <h1 class="text-center mb-5" id="navigation_mobile_title">sharefiles</h1>
                    <a class="h1 mb-4 mt-5">View</a>
                    <div class="row mt-4 pl-3 mb-5">
                        <div class="pl-5 col">
                            <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                <a href="/zip" class="h1 w-100">Zip files</a>
                            </div>

                            <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                <a href="/games" class="h1 w-100">Games</a>
                            </div>

                            <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                <a href="/images" class="h1 w-100">Image</a>
                            </div>

                            <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                <a href="/other" class="h1 w-100">Other</a>
                            </div>
                        </div>
                    </div>

                    <a class="h1 mb-4">Upload</a>
                    <div class="row mt-4 pl-3 mb-5">
                        <div class="pl-5 col">
                            <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                <a href="/create?type=zip" class="h1 w-100">Zip</a>
                            </div>

                            <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                <a href="/create?type=games" class="h1 w-100">Games</a>
                            </div>

                            <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                <a href="/create?type=image" class="h1 w-100">Image</a>
                            </div>

                            <div class="row col mb-2 p-2 dark-color-2 navigation_mobile_element">
                                <a href="/create?type=other" class="h1 w-100">Other</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>

<div class="container px-5 mb-4">
    @yield('content')
</div>

</body>
</html>
