<!doctype html>
<html lang="en">

<head>
    <!-- Basic Page Info -->
    <meta charset="UTF-8">

    <!-- Theme Color -->
    <meta name="theme-color" content="#FFF">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Museo Sans 700';
            src: url('../Fonts/MuseoSansRounded-700Italic.woff2') format('woff2'),
                url('../Fonts/MuseoSansRounded-700Italic.woff') format('woff'),
                url('../Fonts/MuseoSansRounded-700Italic.ttf') format('truetype');
            font-weight: 600;
            font-style: italic;
            font-display: swap;
        }

        body {
            font-family: "Inter", sans-serif;
            font-size: 14px;
            line-height: 20px;
            font-weight: 400;
            color: #000;
            background-color: #F0F0F0;
        }

        h6.h6 {
            font-family: "Museo Sans Rounded 700";
            font-size: 20px;
            font-weight: 700;
            line-height: 28px;
            color: #000000;
            text-align: left;
            margin: 0;
        }


        .email-mailer {
            max-width: 600px;
            background-color: #FFFFFF;
            border: 1px solid #F0F0F0;
            border-radius: 8px;
            padding: 28px 32px;
        }

        .email-mailer-wrap {
            position: absolute;
            margin: auto;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .email-mailer-body {
            padding: 28px 0;
            border-color: #D8D8D8;
            border-width: 1px 0 1px 0;
            border-style: solid;
        }

        .email-mailer-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 28px;
        }

        .contact-img {
            border-radius: 100%;
            border: 1px solid #00CE54;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .contact-area {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .contact-area a {
            font-family: "Inter", sans-serif;
            font-size: 14px;
            line-height: 20px;
            font-weight: 400;
            color: #58585B;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        .contact-area a:hover {
            color: #00CE54;
        }

        .request-pass {
            font-family: "Inter", sans-serif;
            font-size: 14px;
            line-height: 20px;
            font-weight: 400;
            color: #000;
            padding: 28px 0;
        }

        .cta-btn a {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: "Inter", sans-serif;
            font-size: 16px;
            font-weight: 600;
            line-height: 24px;
            color: #FFFFFF;
            border-radius: 40px;
            background-color: #00CE54;
            padding: 12px 24px;
            border: 1px solid transparent;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        .cta-btn a:hover {
            background-color: transparent;
            border: 1px solid #00CE54;
            color: #000;
        }

        .cta-btn a:hover svg path {
            stroke: #000000;
        }

        .request-pass a {
            color: #00CE54;
            font-weight: 600;
            text-decoration-color: #00CE54;
            transition: all 0.3s ease-in-out;
        }

        .request-pass a:hover {
            color: #58585B;
        }

        .charity-number {
            font-family: "Inter", sans-serif;
            font-size: 14px;
            line-height: 20px;
            font-weight: 400;
            color: #000000;
        }

        .email-mailer-body p {
            font-family: "Inter", sans-serif;
            margin: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 20px;
            padding: 28px 0;
        }

        .email-team {
            font-family: "Inter", sans-serif;
            font-weight: 600;
            line-height: 20px;
            font-size: 14px;
            color: #000000;
        }

        .email-malier-header {
            padding-bottom: 28px;
            text-align: center;
        }

        @media (max-width: 991px) {
            .email-mailer {
                max-width: 100%;
                padding: 20px 24px;
            }
        }
    </style>
</head>

<body>
    <!-- <section class="email-mailer-wrap">
        <div class="email-mailer">
            <div class="email-malier-header">
                <img src='https://i.ibb.co/sy4qYwb/logo-active.png' alt='logo-active' width='113' height='48' />
            </div>
            <div class="email-mailer-body">
                <h6 class="h6">Hello,</h6>
                <p>We’ve received a request to reset the password for the jgift.org account associated with john.smith@mail.com.
                    <br><br>
                    You can reset your password by clicking the link below:
                </p>

                <div class="cta-btn">
                    <a href='#' target='_blank'>
                        Reset password
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.9375 4.0625L16.5625 9.6875L10.9375 15.3125M3.4375 9.6875H16.5625" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>

                <div class="request-pass">
                    If you didn’t request a new password, please let us know immediately by the email
                    <a href="mailto:info@jgift.org" target='_blank'>
                        info@jgift.org
                    </a>
                </div>

                <div class="email-team">The Aish team</div>
            </div>

            <div class="email-mailer-footer">
                <div class="contact-area">
                    <div class="contact-img">
                        <img src='https://i.ibb.co/d6kKFRq/black-call.png' alt='call' width="16" height="16" />
                    </div>
                    <a href='tel:0208-457-4429' target='_self'>0208 457 4429</a>
                </div>
                <div class="contact-area">
                    <div class="contact-img">
                        <img src='https://i.ibb.co/FWXm8G2/mail.png' alt='email' width="16" height="16" />
                    </div>
                    <a href="mailto:info@jgift.org" target='_blank'>
                        info@jgift.org
                    </a>
                </div>
                <div class="charity-number">Registered charity no: 1153393</div>
            </div>
        </div>
    </section> -->
    <div class="email-mailer-wrap">
        <table class='email-mailer'>
            <tbody>
                <tr>
                    <td align="center">
                        <table>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="email-malier-header">
                                            <img src='https://i.ibb.co/sy4qYwb/logo-active.png' alt='logo-active' width='113' height='48' />
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="email-mailer-body">
                            <h6 class="h6">Hello,</h6>
                            <p>We’ve received a request to reset the password for the jgift.org account associated with john.smith@mail.com.
                                <br><br>
                                You can reset your password by clicking the link below:
                            </p>

                            <div class="cta-btn">
                                <a href='#' target='_blank'>
                                    Reset password
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.9375 4.0625L16.5625 9.6875L10.9375 15.3125M3.4375 9.6875H16.5625" stroke="white" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                            </div>

                            <div class="request-pass">
                                If you didn’t request a new password, please let us know immediately by the email
                                <a href="mailto:info@jgift.org" target='_blank'>
                                    info@jgift.org
                                </a>
                            </div>

                            <div class="email-team">The Aish team</div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="email-mailer-footer">
                            <div class="contact-area">
                                <div class="contact-img">
                                    <img src='https://i.ibb.co/d6kKFRq/black-call.png' alt='call' width="16" height="16" />
                                </div>
                                <a href='tel:0208-457-4429' target='_self'>0208 457 4429</a>
                            </div>
                            <div class="contact-area">
                                <div class="contact-img">
                                    <img src='https://i.ibb.co/FWXm8G2/mail.png' alt='email' width="16" height="16" />
                                </div>
                                <a href="mailto:info@jgift.org" target='_blank'>
                                    info@jgift.org
                                </a>
                            </div>
                            <div class="charity-number">Registered charity no: 1153393</div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>