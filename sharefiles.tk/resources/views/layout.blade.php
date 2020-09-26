<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>sharefiles</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet"> <!-- AUB migraten naar SCSS en dan in de gecompileerde CSS doen -->
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
                        @if(Auth::check())<a class="nav-link dropdown-toggle py-0 px-3" id="navbar--user"
                                             data-toggle="dropdown"
                                             aria-haspopup="true" aria-expanded="false">{{ Auth::user()->username }}</a>
                        @endif
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
                            <a class="nav-link pl-0 py-0" href="/videos">videos</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link py-0" href="/games">games</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link py-0" href="/images">images</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link py-0" href="/other">others</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link py-0" href="/music">music</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle py-0" id="navbarDropdownMenuLink" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">upload</a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="/create?type=video">video</a>
                                <a class="dropdown-item" href="/create?type=game">game</a>
                                <a class="dropdown-item" href="/create?type=image">image</a>
                                <a class="dropdown-item" href="/create?type=other">other</a>
                                <a class="dropdown-item" href="/create?type=music">music</a>
                            </div>
                        </li>

                        @if(Auth::check())
                            @if(Auth::user()->role == "admin")
                                <li class="nav-item">
                                    <a class="nav-link py-0" href="/invite">invite-others</a>
                                </li>
                            @endif
                        @endif
                    </ul>
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

<div class="container px-5 mb-4" id="app">
    @yield('content')
</div>
<script src="/js/app.js" type="application/javascript"></script>

</body>
</html>
