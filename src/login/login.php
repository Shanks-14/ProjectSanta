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
    <div class="align-right">
        <button class="icon-btn theme-toggle-btn place-items-center">
            <i class="ri-sun-line theme-light-icon"></i>
            <i class="ri-moon-line theme-dark-icon"></i>
        </button>
    </div>
</nav>
<!--body content-->
<div class="container body-content">
    <div class="login-page-container">
        <div class="login-page">
            <div class="page-header">
                <h1>Access Project</h1>
            </div>
            <div class="row">
                <div class="form-group">
                    <form id="login" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <input type="hidden" id="ReturnUrl" name="ReturnUrl" value="">
                        <fieldset>
                            <div class="user">
                                <label class="form-label" for="Username">
                                    <strong>Username Or Email</strong>
                                </label>
                                <input class="input" autofocus type="text" data-val="true" data-val-required="The Username or Email is required." id="Username" name="Username" value>
                            </div>
                            <div class="pass">
                                <label class="form-label" for="Password">Password</label>
                                <input type="password" class="input" autocomplete="off" data-val="true" data-val-required="The Password field is required." id="Password" name="Password">
                            </div>
                            <div class="forget-actions">
                                <div class="login-remember">
                                    <label for="RememberLogin">
                                        <input checked="checked" type="checkbox" data-val="true" data-val-required="The RememberLogin field is required." id="RememberLogin" name="RememberLogin" value="true">
                                        <strong>Remember me</strong>
                                    </label>
                                </div>
                            <!--Anchor to recover password page-->
                            </div>
                            <div class="mb-3 login-buttons">
                                <button class="btn btn-primary btn-santa-primary" type="submit" name="button" value="login" id="login">Log In</button>
                            </div>
                        </fieldset>
                        <!--Sign Up Options-->
                        <div>
                            <div class="login-separator">
                                <div class="login-separator-line"></div>
                                <div class="Login-separator-text">
                                    " OR "
                                </div>
                                <div class="login-separator-line"></div>
                            </div>
                            <ul class="list-block">
                                <li>
                                    <a class="btn btn-outline-secondary ext-login-btn Google-btn" href="https://auth.elfster.com/External/Challenge?scheme=Google&returnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3Delf-nodejs%26scope%3Dopenid%2520profile%2520api%2520offline_access%26response_type%3Dcode%26redirect_uri%3Dhttps%253A%252F%252Fwww.elfster.com%252Fauth%252Fv2%252Fcallback%252F%26code_challenge%3DHRBtsCM29qoI8vC5-Wce7kpMtC7skDjk-XH0gFXn-Kk%26code_challenge_method%3DS256">
                                        <span class="btn-content">
                                            <span class="icon-base"></span>
                                            <span>Sign in with Google</span>
                                            <span></span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a class="btn btn-outline-secondary ext-login-btn Facebook-btn" href="https://auth.elfster.com/External/Challenge?scheme=Facebook&returnUrl=%2Fconnect%2Fauthorize%2Fcallback%3Fclient_id%3Delf-nodejs%26scope%3Dopenid%2520profile%2520api%2520offline_access%26response_type%3Dcode%26redirect_uri%3Dhttps%253A%252F%252Fwww.elfster.com%252Fauth%252Fv2%252Fcallback%252F%26code_challenge%3DHRBtsCM29qoI8vC5-Wce7kpMtC7skDjk-XH0gFXn-Kk%26code_challenge_method%3DS256">
                                        <span class="btn-content">
                                            <span class="icon-base"></span>
                                            <span>Sign in with Facebook</span>
                                            <span></span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <input type="hidden" id="ReturnUrl" name="ReturnUrl" value="">
                        <input name="RememberLogin" type="hidden" value="false">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="login-page-footer">
        <div class="ext-login-btn sign-in-option">
            <span>Don't have an account?</span>
            <a class="register-link" href="../signup/signup.html">
                <span>Join the Project</span>
            </a>
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