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

    <!-- thank-you-wrap section start -->
    <section class="thank-you-wrap">
        <div class="container">
            <div class="thank-you">
                <div class="thank-u-img">
                    <img src='./images/thanku-img.png' width="121" height="132" />
                </div>
                <h1 class="h4">Thank you!</h1>
                <p>We have received your message and will be in contact shortly.</p>
                <div class="cta-btn btn-border">
                    <a href='#' target="_self">
                        Return Home
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- thank-you-wrap section end -->

    <?php
    global $hide_footer_form;
    $hide_footer_form = false;
    ?>
    <?php include("include/footer.php"); ?>
    <?php include("include/script.php"); ?>
</body>

</html>