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
                        <li class="menu-item">How it works</li>
                    </a>
                    <a href="#">
                        <li class="menu-item">Testimonials</li>
                    </a>
                    <a href="#">
                        <li class="menu-item">Support</li>
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
        <!-- <div class="wave">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div> -->
        <div class="spacer layer1"></div>
    </header>
    <div id="how">
        <div class="section-background"></div>
        <h1 class="section-title">How it works</h1>
        <h5 class="section-subtitle">To jest podtytuł sekcji</h5>
        <div class="how-tiles">
            <div class="how-tile">
                <div class="tile-number">1</div>
                <img src="{{ asset('img/step_1.png') }}" alt="">
                <h2 class="how-name">Add all your investments</h2>
                <p>Add all the investments you have in your portfolio - gold, silver, bonds or cryptocurrencies.
                </p>
            </div>
            <div class="how-tile">
                <div class="tile-number">2</div>
                <img src="{{ asset('img/step_2.png') }}" alt="">
                <h2 class="how-name">Update only purchases or sales</h2>
                <p>Only update new purchases or sales. Prices update in real time and are in line with the stock
                    exchanges.</p>
            </div>
            <div class="how-tile">
                <div class="tile-number">3</div>
                <img src="{{ asset('img/step_3.png') }}" alt="">
                <h2 class="how-name">Watch the market behavior</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ipsum dignissimos dolore.
                    Mollitia debitis consequuntur sequi! Enim possimus amet nulla illum blanditiis eaque iste, officiis
                    doloremque, iure, laudantium perferendis labore?</p>
            </div>
        </div>
    </div>
</body>

</html>
