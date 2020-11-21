<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>sharefiles</title>

    <link href="/css/app.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">
</head>

<body>

<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="dark-color-1" id="sidebar-wrapper">
        <a href="/"><div class="sidebar-heading">sharefiles</div></a>
        <div class="list-group list-group-flush">
            <a href="/videos" class="list-group-item list-group-item-action dark-color-3">videos</a>
            <a href="/games" class="list-group-item list-group-item-action dark-color-3">games</a>
            <a href="/images" class="list-group-item list-group-item-action dark-color-3">images</a>
            <a href="/other" class="list-group-item list-group-item-action dark-color-3">others</a>
            <a href="/music" class="list-group-item list-group-item-action dark-color-3">music</a>
            <a class="list-group-item list-group-item-action dark-color-3" data-toggle="collapse" data-target="#uploadContent" aria-controls="uploadContent" aria-expanded="false" aria-label="Toggle upload options">upload</a>
            <div class="collapse navbar-collapse" id="uploadContent">
                <a href=/create?type=video class="list-group-item list-group-item-action dark-color-1"><h6 class="pl-3">videos</h6></a>
                <a href=/create?type=game class="list-group-item list-group-item-action dark-color-1"><h6 class="pl-3">game</h6></a>
                <a href=/create?type=image class="list-group-item list-group-item-action dark-color-1"><h6 class="pl-3">image</h6></a>
                <a href=/create?type=other class="list-group-item list-group-item-action dark-color-1"><h6 class="pl-3">other</h6></a>
                <a href=/create?type=music class="list-group-item list-group-item-action dark-color-1"><h6 class="pl-3">music</h6></a>
            </div>
            <a href="/invite" class="list-group-item list-group-item-action dark-color-3">invite others</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <div class="mobilenav-wrapper">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <h1>sharefiles</h1>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/videos">videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/games">games</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/images">images</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/other">other</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/music">music</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="collapse" data-target="#uploadContent" aria-controls="uploadContent" aria-expanded="false" aria-label="Toggle upload options">upload</a>
                        </li>
                        <div class="collapse navbar-collapse" id="uploadContent">
                            <a href=/create?type=video class="list-group-item list-group-item-action dark-color-1">video</a>
                            <a href=/create?type=game class="list-group-item list-group-item-action dark-color-1">game</a>
                            <a href=/create?type=image class="list-group-item list-group-item-action dark-color-1">image</a>
                            <a href=/create?type=other class="list-group-item list-group-item-action dark-color-1">other</a>
                            <a href=/create?type=music class="list-group-item list-group-item-action dark-color-1">music</a>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="/invite">invite-others</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="container px-5 mb-4" id="app">
            @yield('content')
        </div>
    </div>
    <!-- /#page-content-wrapper -->

</div>


<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>

<script src="/js/app.js" type="application/javascript"></script>

</body>
</html>
