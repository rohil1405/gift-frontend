<!doctype html>
<html lang="en">

<head>
    <?php include("include/head.php"); ?>
</head>

<body class="header-main-header">


    <?php include("include/header.php"); ?>
    <!-- banner start -->
    <section class="banner-wrap banner-inner" style="background: linear-gradient(0deg, #654595, #654595),
linear-gradient(180deg, #654595 32.66%, rgba(101, 69, 149, 0) 100%);
">
        <div class="banner-overlay">
            <img src='./images/about-overlay.png' alt='about-overlay-img' width='1600' height='308' />
        </div>
        <div class="container">
            <div class="banner">
                <div class="banner-content">
                    <div class="banner-inner-title">Who we are</div>
                    <h1 class="h1">About Us</h1>
                </div>
            </div>
        </div>
    </section>
    <!-- banner end -->

    <!-- about-tabs-wrap-section start -->
    <div class="about-tabs-wrap">
        <div class="about-tabs">
            <div class="about-main-tabs">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="who-are-tab" data-bs-toggle="pill" data-bs-target="#who-are" type="button" role="tab" aria-selected="true">Who we are</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="h-gift-tab" data-bs-toggle="pill" data-bs-target="#h-gift" type="button" role="tab" aria-selected="false">History of GIFT</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="we-help-tab" data-bs-toggle="pill" data-bs-target="#we-help" type="button" role="tab" aria-controls="we-help" aria-selected="false">How we help</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="meet-team-tab" data-bs-toggle="pill" data-bs-target="#meet-team" type="button" role="tab" aria-controls="meet-team" aria-selected="false">Meet the team</button>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="who-are" role="tabpanel" aria-labelledby="who-are-tab" tabindex="0">
                    <div class="who-we-are">
                        <div class="who-we-are-left">
                            <h2 class="h2">Who we are</h2>
                            <p>Across London, Manchester and Israel we create givers. We know that being kind or helping others isn’t something that just happens automatically. It is a mindset that needs to be taught, nurtured and encouraged, so that present and future generations are imbued with this core tenet of Judaism.</p>

                            <div class="we-are-content">
                                <p>It’s what we give to others, more than what we get from others, which makes for a meaningful and happy life.</p>
                                <div class="content-author">Lord Rabbi Jonathan Sacks</div>
                            </div>

                            <p>We are immensely grateful to all of our wonderful volunteers and generous supporters; through you, we are able to inspire and enable lifelong giving, creating a community that is engaged, supported and empowered by the gift of giving. Thank you for all that your involvement allows us to achieve.</p>
                        </div>
                        <div class="who-we-are-right"></div>

                    </div>
                </div>

                <div class="tab-pane fade" id="h-gift" role="tabpanel" aria-labelledby="h-gift-tab" tabindex="0">
                    <div class="container">
                        <div class="history-gift">
                            <h2 class="h2">History of GIFT</h2>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="we-help" role="tabpanel" aria-labelledby="we-help-tab" tabindex="0">
                    <div class="container">
                        <div class="how-we-help">
                            <h2 class="h2">How we help</h2>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="meet-team" role="tabpanel" aria-labelledby="meet-team-tab" tabindex="0">
                    <div class="container">
                        <div class="meet-team">
                            <h2 class="h2">Meet the Team</h2>
                            <div class="about-meet-tabs">
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="london-tab" data-bs-toggle="pill" data-bs-target="#london" type="button" role="tab" aria-controls="london" aria-selected="true">London</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="manchester-tab" data-bs-toggle="pill" data-bs-target="#manchester" type="button" role="tab" aria-controls="manchester" aria-selected="false">Manchester</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="isreal-tab" data-bs-toggle="pill" data-bs-target="#israel" type="button" role="tab" aria-controls="israel" aria-selected="false">Israel</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="london" role="tabpanel" aria-labelledby="london-tab" tabindex="0">...</div>
                                    <div class="tab-pane fade" id="manchester" role="tabpanel" aria-labelledby="manchester-tab" tabindex="0">...</div>
                                    <div class="tab-pane fade" id="isreal" role="tabpanel" aria-labelledby="israel-tab" tabindex="0">...</div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!-- about-tabs-wrap-section end -->

    <section class="our-newsletter-wrap">
        <div class="container">
            <div class="our-newsletter">
                <div class="our-newsletter-content">
                    <h2 class="h4">Subscribe to our newsletter</h2>
                    <form>
                        <div class="fieldset">
                            <input type="text" class="form-control" id="first-name" placeholder="First name">
                        </div>
                        <div class="fieldset">
                            <input type="text" class="form-control" id="sur-name" placeholder="Surname">
                        </div>
                        <div class="fieldset">
                            <input type="email" class="form-control" id="email" placeholder="Email address">
                        </div>
                        <button type="submit" class="cta-form-btn">Subscribe
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.9375 4.0625L16.5625 9.6875L10.9375 15.3125M3.4375 9.6875H16.5625" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include("include/footer.php"); ?>
    <?php include("include/script.php"); ?>
</body>

</html>