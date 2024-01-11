<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyMusic - @yield('title', 'Website')</title>
    <link href="/bootstrap/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-secondary" data-bs-theme="dark">
        <div class="container">
            <a class="navbar-brand" href="/"
                style="font-size: 29px;  font-family: Lucida Handwriting, cursive;">Music</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/"
                            style="font-family:  Handwriting, cursive;"><i class="bi bi-house-door-fill"></i> Home</a>
                    </li>

                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="/musics/data" style="font-family:  Handwriting, cursive;">Master
                                Playlist Music</a>
                        </li>
                    @endauth
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0  text-dark">
                    <form action="/" class="d-flex " role="search">
                        <input class="form-control me-2 bg-light-subtle" type="search" name="search"
                            placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit"
                            style="font-family:  Handwriting, cursive;">Search</button>
                    </form>
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                {{ auth()->user()->name }}
                            </a>
                            <ul class="dropdown-menu">
                                <form action="/logout" method="post">
                                    @csrf
                                    <li>
                                        <button type="submit" class="dropdown-item"
                                            style="font-family:  Handwriting, cursive;">Logout</button>
                                    </li>
                                </form>

                            </ul>
                        </li>
                    @else
                        <li class="nav-item text-dark">
                            <a class="nav-link" href="/login" style="font-family:  Handwriting, cursive;"><i
                                    class="bi bi-person-lock"></i> Login</a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-2">
        @yield('content')
    </div>



    <footer class="text-center text-lg-start text-white bg-secondary">
        <section class="d-flex justify-content-between p-4 bg-secondary">
            <!-- Left -->
            <div class="me-5">
                <span style="font-family:  Handwriting, cursive;">Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="https://open.spotify.com/user/09k5r5f7jdbywr0qrqief26h7?si=HFIQ5nVRT9m9kzQpYRjyFA"
                    class="text-white me-4">
                    <i class="bi bi-spotify"> Spotify</i>
                </a>
                <a href="https://github.com/mhdraziff" class="text-white me-4">
                    <i class="bi bi-github"> GitHub</i>
                </a>
                <a href="https://twitter.com/ajip11_" class="text-white me-4">
                    <i class="bi bi-twitter-x"> Twitter-X</i>
                </a>
                </a>
                <a href="https://www.instagram.com/_mhdrazif/" class="text-white me-4">
                    <i class="bi bi-instagram"> Instagram</i>
                </a>
            </div>
            <!-- Right -->
        </section>

        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)"
            style="font-family:  Handwriting, cursive;">
            © 2024 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/" style="font-family:  Handwriting, cursive;">Muhammad
                Razif</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="/bootstrap/bootstrap.bundle.min.js"></script>
</body>

</html>
