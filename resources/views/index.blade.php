<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap" rel="stylesheet">

    <!-- Styles -->


    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
</head>

<body>
    <header>
        <nav>
            <div class="menu-wrapper">
                <div class="logo">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </div>
                <ul class="menu-list">
                    <a href="#how">
                        <li class="menu-item">How it works</li>
                    </a>
                    <a href="#features">
                        <li class="menu-item">Features</li>
                    </a>
                    <a href="#testimonials">
                        <li class="menu-item">Testimonials</li>
                    </a>
                    <a href="#contact">
                        <li class="menu-item">Support</li>
                    </a>
                    <li class="menu-item last"><a href="/login">Login</a> / <a href="/register">Register</a></li>
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
    <section id="how">
        <div class="section-background"></div>
        <h5 class="section-subtitle">How it works</h5>
        <h1 class="section-title">There are three simple steps</h1>
        <div class="how-tiles">
            <div class="how-tile">
                <div class="tile-number">1</div>
                <img src="{{ asset('img/how/add_your_investments.png') }}" alt="">
                <h2 class="how-name">Add all your investments</h2>
                <p>Add all the investments you have in your portfolio - gold, silver, bonds or cryptocurrencies.
                </p>
            </div>
            <div class="how-tile">
                <div class="tile-number">2</div>
                <img src="{{ asset('img/how/update_sales_and_purchases.png') }}" alt="">
                <h2 class="how-name">Update only purchases or sales</h2>
                <p>Only update new purchases or sales. Prices update in real time and are in line with the stock
                    exchanges.</p>
            </div>
            <div class="how-tile">
                <div class="tile-number">3</div>
                <img src="{{ asset('img/how/watch_market_behavior.png') }}" alt="">
                <h2 class="how-name">Watch the market behavior</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates ipsum dignissimos dolore.
                    Mollitia debitis consequuntur sequi!.</p>
            </div>
        </div>
    </section>
    <section id="features">
        <h5 class="section-subtitle">Features</h5>
        <h1 class="section-title">Main <span class="colored">features</span></h1>
        <div class="features-wrapper">
            <div class="feature">
                <div class="feature-image"><img src="{{ asset('img/features/up_to_date.png') }}" alt="Up to date"></div>
                <div class="feature-text">
                    <h2 class="feature-title">Always up to date</h2>
                    <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugit,
                        vitae fugiat iure eveniet possimus.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image"><img src="{{ asset('img/features/cryptocurrency.png') }}" alt="Up to date">
                </div>
                <div class="feature-text">
                    <h2 class="feature-title">Track your crpyto</h2>
                    <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugit,
                        vitae fugiat iure eveniet possimus.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image"><img src="{{ asset('img/features/precious_metals.png') }}" alt="Up to date">
                </div>
                <div class="feature-text">
                    <h2 class="feature-title">Precious metals</h2>
                    <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugit,
                        vitae fugiat iure eveniet possimus.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image"><img src="{{ asset('img/features/company_shares.png') }}" alt="Up to date">
                </div>
                <div class="feature-text">
                    <h2 class="feature-title">Company shares</h2>
                    <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugit,
                        vitae fugiat iure eveniet possimus.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image"><img src="{{ asset('img/features/easy_to_use.png') }}" alt="Up to date">
                </div>
                <div class="feature-text">
                    <h2 class="feature-title">Easy to use</h2>
                    <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugit,
                        vitae fugiat iure eveniet possimus.</p>
                </div>
            </div>
            <div class="feature">
                <div class="feature-image"><img src="{{ asset('img/features/up_to_date.png') }}" alt="Up to date"></div>
                <div class="feature-text">
                    <h2 class="feature-title">Always up to date</h2>
                    <p class="feature-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi fugit,
                        vitae fugiat iure eveniet possimus.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials">
        <div class="custom-shape-divider-bottom-1663711479">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25" class="shape-fill"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5" class="shape-fill"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    class="shape-fill"></path>
            </svg>
        </div>
        <h5 class="section-subtitle">Testimonials</h5>
        <h1 class="section-title">What do <span class="colored">our clients</span> say about us? </h1>
        <section class="splide" aria-labelledby="carousel-heading">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="testimonial-tile">
                            <img src="{{ asset('img/testimonials/quote.png') }}" alt="">
                            <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Excepturi
                                cupiditate tempore quod odit, officia ut perferendis aliquam earum! Accusamus odio
                                quibusdam
                                ipsam
                                ratione sequi molestiae tempore voluptate nostrum voluptatum amet.</p>
                            <div class="testimonial-author">
                                <h3 class="testimonial-name">John Doe</h3>
                                <h6 class="testimonial-status">Investor in precious metals</h6>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="testimonial-tile">
                            <img src="{{ asset('img/testimonials/quote.png') }}" alt="">
                            <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Excepturi
                                cupiditate tempore quod odit, officia ut perferendis aliquam earum! Accusamus odio
                                quibusdam
                                ipsam
                                ratione sequi molestiae tempore voluptate nostrum voluptatum amet.</p>
                            <div class="testimonial-author">
                                <h3 class="testimonial-name">John Doe</h3>
                                <h6 class="testimonial-status">Investor in precious metals</h6>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="testimonial-tile">
                            <img src="{{ asset('img/testimonials/quote.png') }}" alt="">
                            <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Excepturi
                                cupiditate tempore quod odit, officia ut perferendis aliquam earum! Accusamus odio
                                quibusdam
                                ipsam
                                ratione sequi molestiae tempore voluptate nostrum voluptatum amet.</p>
                            <div class="testimonial-author">
                                <h3 class="testimonial-name">John Doe</h3>
                                <h6 class="testimonial-status">Investor in precious metals</h6>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="testimonial-tile">
                            <img src="{{ asset('img/testimonials/quote.png') }}" alt="">
                            <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Excepturi
                                cupiditate tempore quod odit, officia ut perferendis aliquam earum! Accusamus odio
                                quibusdam
                                ipsam
                                ratione sequi molestiae tempore voluptate nostrum voluptatum amet.</p>
                            <div class="testimonial-author">
                                <h3 class="testimonial-name">John Doe</h3>
                                <h6 class="testimonial-status">Investor in precious metals</h6>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="testimonial-tile">
                            <img src="{{ asset('img/testimonials/quote.png') }}" alt="">
                            <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Excepturi
                                cupiditate tempore quod odit, officia ut perferendis aliquam earum! Accusamus odio
                                quibusdam
                                ipsam
                                ratione sequi molestiae tempore voluptate nostrum voluptatum amet.</p>
                            <div class="testimonial-author">
                                <h3 class="testimonial-name">John Doe</h3>
                                <h6 class="testimonial-status">Investor in precious metals</h6>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="testimonial-tile">
                            <img src="{{ asset('img/testimonials/quote.png') }}" alt="">
                            <p class="testimonial-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Excepturi
                                cupiditate tempore quod odit, officia ut perferendis aliquam earum! Accusamus odio
                                quibusdam
                                ipsam
                                ratione sequi molestiae tempore voluptate nostrum voluptatum amet.</p>
                            <div class="testimonial-author">
                                <h3 class="testimonial-name">John Doe</h3>
                                <h6 class="testimonial-status">Investor in precious metals</h6>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </section>
    <section id="contact">
        <h5 class="section-subtitle">Support</h5>
        <h1 class="section-title">Don't hesitate to <span class="colored">contact us</span></h1>
        <div class="form-wrapper">
            <div class="form-info">
                <h3>Let's get in touch</h3>
                <h6>We're open for any suggestion or just to have a chat</h6>
                <div class="form-icons">
                    <div class="icon-wrapper">
                        <div class="icon-circle">
                            <img src="{{ asset('img/mail.png') }}" alt="">
                        </div>
                        <p>contact@invest-tracker.com</p>
                    </div>
                </div>
            </div>
            <div class="form-inputs">
                <h2>Get in touch</h2>
                <form action="">
                    <div class="two-inputs">
                        <div class="input-wrapper">
                            <label for="name">Full name</label>
                            <input name="name" type="text" placeholder="Name">
                        </div>
                        <div class="input-wrapper">
                            <label for="email">Email address</label>
                            <input name="email" type="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <label for="subject">Subject</label>
                        <input name="subject" type="text" placeholder="Subject">
                    </div>
                    <div class="input-wrapper">
                        <label for="message">Message</label>
                        <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
                    </div>
                    <input class="send-msg" type="submit" value="Send Message">
                </form>
            </div>
        </div>
    </section>
    <footer>

    </footer>
    <script src="{{ asset('js/splide.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
