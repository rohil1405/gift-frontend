<!doctype html>
<html lang="en">

<head>
    <?php include("include/head.php"); ?>
</head>


<body>
    <?php
    global $prefix_url;
    $prefix_url = 'thank-you.php';
    ?>

    <?php include("include/header.php"); ?>

    <!-- not-found-wrap section start -->
    <section class="not-found-wrap">
        <div class="container">
            <div class="not-found">
                <div class="not-found-title">Oops</div>
                <h1 class="h4">Page not found</h1>
                <p>Sorry, the page you’re looking for may have been moved or deleted.</p>
                <div class="cta-btn btn-border">
                    <a href='#' target="_self">
                        Return Home
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- not-found-wrap section end -->

    <?php
    global $hide_footer_form;
    $hide_footer_form = false;
    ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/script.php"); ?>
</body>

</html>