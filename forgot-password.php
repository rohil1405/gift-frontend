<!doctype html>
<html lang="en">

<head>
    <?php include("include/head.php"); ?>
</head>

<body>

    <section class="forgot-password-wrap">
        <div class="forgot-password-left">
            <a href='index.php' target='_self'>
                <img src='./images/logo-active.png' width="113" height="48" alt='logo' />
            </a>
            <div class="forgot-password-content">
                <h1 class="h1">Forgot your login details?</h1>
                <p>Don't worry, it happens to the best of us. Please enter your email address and date of birth and we’ll send you a link to reset your password.</p>
                <form>
                    <div>
                        <label for="femail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="femail" placeholder="Email address">
                    </div>
                </form>
                <div class="forgot-cta">
                    <div class="cta-btn btn-border">
                        <a href='index.php' target='_self'>Cancel</a>
                    </div>
                    <div class="cta-btn">
                        <a href='forgot-password-3.php' target="_self">Submit
                            <img src='./images/white-arrow.png' alt='white-arrow' width="20" height="20" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="forgot-password-right">
            <div class='forgot-password-right-top'>
                <div class='fp-img fimg-one'>
                    <img src='./images/banner-four.png' alt='img-one' width='137' height="140" />
                </div>
                <div class='fp-img fimg-two'><img src='./images/banner-five.png' alt='img-two' width='125' height="180" /></div>
                <div class='fp-img fimg-three'>
                    <img src='./images/f-img.png' alt='img-three' width='449' height="316" />
                </div>
            </div>

            <div class="forgot-password-right-bottom">
                <div class='fp-img fimg-four'><img src='./images/f-two.png' alt='f-two' width='260' height="290" /></div>
                <div class='fp-img fimg-five'>
                    <img src='./images/f-three.png' alt='f-three' width='400' height="432" />
                </div>
            </div>
        </div>
    </section>


    <?php include("include/script.php"); ?>
</body>

</html>