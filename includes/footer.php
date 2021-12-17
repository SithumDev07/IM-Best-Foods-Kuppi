<footer>
    <div class="footer-content">

    </div>
</footer>
</main>
<div class="product-preload beforeLoad"></div>
<div class="product-preload-yellow beforeLoad"></div>
<section class="product-page beforeLoad">
    <div class="detail-conatiner">
        <?php
        //* Where the code will be injected
        ?>
    </div>
</section>
<div class="product-preload-green beforeLoad"></div>
<section class="signup-form beforeLoad">
    <div class="mx-auto form-container">
        <form class="form-content" action="./operations/login.php" method="POST">
            <div class="logo">
                <h1 translate="no" class="translate-no logo-text">IM <span class="inner-logo">Best</span> Foods</h1>
            </div>
            <p for="username">username or email</p>
            <input type="text" name="username" placeholder="username or email" id="username" class="username-input">
            <p for="password">password</p>
            <input type="password" name="password" placeholder="password" id="password" class="password-input">
            <input type="submit" id="login-submit" value="login">
            <div class="form-bottom">
                <a href="/forgot-password">forgot password?</a>
                <a href="/register">Don't have an account? <span class="register-link">Register</span></a>
            </div>
        </form>
        <div class="form-image">
            <img src="./images/formside.png" alt="Form Advertising Image">
        </div>
    </div>
</section>

<section class="login-form beforeLoad">
    <div class="mx-auto form-container">
        <form class="form-content" action="./operations/signup.php" method="POST">
            <div class="logo">
                <h1 translate="no" class="translate-no logo-text">IM <span class="inner-logo">Best</span> Foods</h1>
            </div>
            <p for="username">username or email</p>
            <input type="text" name="username" placeholder="username or email" id="username_signup" class="username-input">
            <p for="password">password</p>
            <input type="password" name="password" placeholder="password" id="password_signup" class="password-input">
            <input type="submit" id="signup-submit" value="signup">
            <div class="form-bottom">
                <a href="/forgot-password">forgot password?</a>
                <span id="change-to-signup">Already have an account? <span class="register-link">Login</span></span>
            </div>
        </form>
        <div class="form-image">
            <img src="./images/formside.png" alt="Form Advertising Image">
        </div>
    </div>
</section>
<script src="./data/data.js"></script>
<script src="./scripts/animation-handler.js"></script>
<script src="./scripts/product-opener.js"></script>
<script src="./scripts/signup-form-opener.js"></script>
<script src="./scripts/product-page-jquery.js"></script>
<script src="./scripts/app.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        let sessionUsername = '<?php echo $_SESSION['sessionUser']; ?>'

        if (sessionUsername) {
            $('.customer-profile').addClass('loadCustomerProfile')
        }
    })
</script>
</body>

</html>