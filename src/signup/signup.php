<?php
include_once('./includes/header.php');
?>
<!--navbar-->
<nav class="nav container">
    <div class="navbar navbar-inverse fixed-top">
        <div class="navbar-content">
            <div class="navbar-header">
                <a class="navbar-logo" title="Project Santa"></a>
            </div>
        </div>
    </div>
    <div class="container body-content">
        <div class="back-button-container">
            <button class="back-button js-back-button">
                <span class="icon-base leftOpen-icon"></span>
                <span>back</span>
            </button>
        </div>
    </div>
    <div class="align-right">
        <button class="icon-btn theme-toggle-btn place-items-center">
            <i class="ri-sun-line theme-light-icon"></i>
            <i class="ri-moon-line theme-dark-icon"></i>
        </button>
    </div>
</nav>
<!--body content-->
<div class="register-page-container">
    <div class="login-page register-page">
        <div class="row">
            <div class="col-sm-12">
                <form class="" novalidate action method="post">
                    <input type="hidden" id="ReturnUrl" value="">
                    <input type="hidden" id="User Id" name="UserId" value>
                    <div class="icon-container">
                        <span class="icon-base email-icon"></span>
                    </div>
                    <div class="page-header">
                        <h1>Let's Get Started</h1>
                    </div>
                    <div>
                        <ul class="list-block">
                            <li>
                                <a class="btn btn-outline-secondary ext-login-btn Google-btn" href="https://auth.elfster.com/External/Challenge?scheme=Google&returnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3Delf-nodejs%26scope%3Dopenid%2520profile%2520api%2520offline_access%26response_type%3Dcode%26redirect_uri%3Dhttps%253A%252F%252Fwww.elfster.com%252Fauth%252Fv2%252Fcallback%252F%26code_challenge%3DRLa0kQ388j1kZBiSubZwk7VmG55YZU3ZVHyzlAVzzL8%26code_challenge_method%3DS256">
                                    <span class="btn-content long-content">
                                        <span class="icon-base"></span>
                                        <span>sign up with google</span>
                                        <span></span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a class="btn btn-outline-secondary ext-login-btn Facebook-btn" href="https://auth.elfster.com/External/Challenge?scheme=Facebook&returnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3Delf-nodejs%26scope%3Dopenid%2520profile%2520api%2520offline_access%26response_type%3Dcode%26redirect_uri%3Dhttps%253A%252F%252Fwww.elfster.com%252Fauth%252Fv2%252Fcallback%252F%26code_challenge%3DRLa0kQ388j1kZBiSubZwk7VmG55YZU3ZVHyzlAVzzL8%26code_challenge_method%3DS256">
                                    <span class="btn-content long-content">
                                        <span class="icon-base"></span>
                                        <span>sign up with facebook</span>
                                        <span></span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="login-separator">
                            <div class="login-separator-line"></div>
                            <div class="login-separator-text">
                                " OR "
                            </div>
                            <div class="login-separator-line"></div>
                        </div>
                    </div>
                    <fieldset>
                        <h4 class="page-subtitle">Sign up with your email address</h4>
                        <div class="row">
                            <div class="col-sm-12 mb-3">
                                <label class="form-label" for="Email">
                                    <strong>Email Address</strong>
                                </label>
                                <input class="input js-email-input" type="email" data-val="true" data-val-email="The Email field is not a valid e-mail address." data-val-required="The Email field is requireed." id="Email" name="Email" value="">
                                <div class="input-error-message hide">Please input correct email address</div>
                            </div>
                        </div>
                    </fieldset>
                    <div class="js-step-two">
                        <fieldset>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label class="form-label" for="Name">
                                        <strong>First Name</strong>
                                    </label>
                                    <input class="input js-first-name-input" type="text" data-val="true" data-val-required="The Name field is required." id="Name" name="Name" value>
                                    <div class="input-error-message hide">Please input first name</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 mb-3">
                                    <label class="form-label" for="LastName">
                                        <strong>Last Name</strong>
                                    </label>
                                    <input class="input js-last-name-input" type="text" id="LastName" name="LastName" value>
                                </div>
                            </div>
                        </fieldset>
                        <div class="js-step-three">
                            <fieldset>
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <label class="form-label" for="Password">
                                            "Password"
                                        </label>
                                        <input type="password" class="input js-password-input" autocomplete="off" data-val="true" data-val-length="The field Password must be a string with a minimum length of 4 and a maximum length of 128." data-val-length-max="128" data-val-lengthe-min="4" data-val-required="The Password field is required." id="Password" maxlength="128" name="Password">
                                        <div class="input-error-message hide">Please input password</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <label class="form-label" for="ConfirmPassword">
                                            "Confirm Password"
                                        </label>
                                        <input type="password" class="input js-password-input" autocomplete="off" data-val="true" data-val-equation="'ConfirmPassword' and 'Password' don not match." data-val-equalto-other="*.Password" data-val-required="The ConfirmPassword field is required." id="ConfirmPassword" name="ConfirmPassword">
                                        <div class="input-error-message hide">Confirm Password and Password do not match</div>
                                        <div class="input-error-message hide">Please confirm your password</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 mb-3">
                                        <button class="show-password-btn js-show-password-btn" type="button">show password</button>
                                        <button class="show-password-button js-hide-password hide" type="button">hide password</button>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="clo-sm-12 subscribe-checkbox-row">
                                        <input class="check-box" data-val="true" data-val-required="The IsApprovedAge field is required." id="IsApprovedAge" name="IsApprovedAge" type="checkbox" value="true">
                                        <label class="inline-label js-age-label" for="IsApprovedAge">
                                            <span>By checking this box, I confirm that I am at least 13 years of age.</span>
                                        </label>
                                        <div class="input-error-messgae hide">Please confirm that you are at least 13 years of age</div>
                                    </div>
                                </div>
                                <div class="mb-3 login-buttons">
                                    <button class="btn btn-primary btn-santa-primary" name="button" value="register">next</button>
                                </div>
                                <!--Login Page Link-->
                                <div>
                                    <div class="sign-in-link-container">
                                        <a href="../login/login.html" class="login-link">
                                            <span>Aready have an account?</span>
                                            <span>Log in</span>
                                        </a>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>


<!-- Script  -->
<script src="/js/main.js"></script>
<?php
include_once('./includes/footer.php');
?>
<script src="../main/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $("#login").submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: "POST",
                url: "/pages/main/main.php",
                data: $(this).serialize(),
                success: function(response) {
                    $("message").html(result);
                },
                error: function() {
                    $("message").html(error);
                }
            })
        });
    });
</script>
</body>

</html>