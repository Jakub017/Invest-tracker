<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">

</head>

<body>
    <header>
        <nav>
            <div class="menu-wrapper">
                <div class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </div>
                <ul class="menu-list">
                    <a href="#">
                        <li class="menu-item">About</li>
                    </a>
                    <a href="#">
                        <li class="menu-item">How it works</li>
                    </a>
                    <a href="#">
                        <li class="menu-item">Functions</li>
                    </a>
                    <li class="menu-item last"><a href="#">Login</a> / <a href="#">Register</a></li>
                </ul>
            </div>
        </nav>
        <div class="welcome">
            <div class="welcome-text">
                <h1>Invest <span class="colored">tracker</span></h1>
                <h2>All your investments <span class="colored">in one place</span></h2>
                <p>With the invest tracker app you can follow all your investments such as silver, gold,
                    cryptocurrencies - All prices are updated on a regular basis.
                </p>
                <div class="welcome-buttons">
                    <a href="#">Try for free!</a>
                    <a href="#">Discover more</a>
                </div>
            </div>
            <div class="welcome-image">
                <img src="{{ asset('img/main.png') }}" alt="">
            </div>
        </div>
    </header>
    <!-- <div id="how">
        <div class="section-background"></div>
        <h1 class="section-title">How it works</h1>
        <h5>To jest podtytuł sekcji</h5>
    </div> -->
</body>

</html>
