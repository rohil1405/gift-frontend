<!doctype html>
<html lang="en">

<head>
    <?php include("include/head.php"); ?>
</head>

<body>

    <!-- register-wrap start -->
    <div class="register-header d-flex align-items-center justify-content-between  position-absolute w-100">
        <a href='#' target='_self' class="main-logo">
            <img src='./images/logo-active.png' width='113' height='48' alt='regsiter-logo' />
        </a>
        <div class="register-signin">
            Already registered? <a href='#' target="_self">Login</a>
        </div>
    </div>

    <section class="register-wrap position-relative">
        <div class="register">
            <div class="register-left w-50">
                <h1 class="h1">Create account</h1>
                <p>Please complete the form below to create your account with GIFT</p>

                <form class="row">
                    <div class="col-md-6 col-fieldset">
                        <label for="inputfirstname" class="form-label">First name</label>
                        <input type="text" class="form-control" id="inputfirstname" placeholder="First name">
                    </div>
                    <div class="col-md-6 col-fieldset">
                        <label for="inputsurname" class="form-label">surname</label>
                        <input type="text" class="form-control" id="inputsurname" placeholder="Surname">
                    </div>
                    <div class="col-md-6 col-fieldset">
                        <label for="inputemail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputemail" placeholder="Email">
                    </div>
                    <div class="col-md-6 col-fieldset">
                        <label for="inputnumber" class="form-label">Mobile</label>
                        <input type="text" class="form-control" id="inputnumber" placeholder="Mobile">
                    </div>
                    <div class="col-12 col-fieldset">
                        <label for="inputaddress1" class="form-label">Address line 1</label>
                        <input type="text" class="form-control" id="inputaddress1" placeholder="Address Line 1">
                    </div>
                    <div class="col-12 col-fieldset">
                        <label for="inputAddress2" class="form-label">Address line 2</label>
                        <input type="text" class="form-control" id="inputAddress2" placeholder="Address Line 2">
                    </div>
                    <div class="col-md-6 col-fieldset">
                        <label for="inputemail" class="form-label">town/city</label>
                        <input type="email" class="form-control" id="inputemail" placeholder="Town/City">
                    </div>
                    <div class="col-md-6 col-fieldset">
                        <label for="inputnumber" class="form-label">postcode</label>
                        <input type="text" class="form-control" id="inputnumber" placeholder="Postcode">
                    </div>
                    <div class="col-12 col-fieldset">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="likeCheck">
                            <label class="form-check-label" for="likeCheck">
                                I would like to receive periodic updates and news about Gift events and opportunities.
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="conditionCheck">
                            <label class="form-check-label" for="conditionCheck">
                                I have read and accept the
                                <a href='#' target='_self'>
                                    terms and conditions
                                </a>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 form-btn">
                        <button type="submit" class="cta-form-btn">
                            Sign In
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.9375 4.0625L16.5625 9.6875L10.9375 15.3125M3.4375 9.6875H16.5625" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
            <div class="register-right w-50">
                <div class='register-right-top'>
                    <div class='fp-img rimg-one'>
                        <img src='./images/banner-four.png' alt='img-one' width='137' height="140" />
                    </div>
                    <div class='fp-img rimg-two'><img src='./images/banner-five.png' alt='img-two' width='125' height="180" /></div>
                    <div class='fp-img rimg-three'>
                        <img src='./images/f-img.png' alt='img-three' width='449' height="316" />
                    </div>
                </div>

                <div class="register-right-center">
                    <div>
                        <div class='fp-img rimg-four'><img src='./images/f-two.png' alt='f-two' width='260' height="290" /></div>
                        <div class='fp-img rimg-8'><img src='./images/rimg-8.png' alt='f-two' width='172' height="114" /></div>
                    </div>

                    <div class='fp-img rimg-five'>
                        <img src='./images/f-three.png' alt='f-three' width='400' height="432" />
                    </div>
                </div>

                <div class="register-right-bottom">
                    <div class='fp-img rimg-six'><img src='./images/fimg-6.png' alt='f-six' width='430' height="316" /></div>
                    <div class='fp-img rimg-seven'>
                        <img src='./images/fimg-7.png' alt='f-seven' width='230' height="316" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- register-wrap end -->


    <?php include("include/script.php"); ?>
</body>

</html>