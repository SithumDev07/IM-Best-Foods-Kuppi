<footer>
    <div class="footer-content">

    </div>
</footer>
</main>
<div class="product-preload beforeLoad"></div>
<div class="product-preload-yellow beforeLoad"></div>
<section class="product-page beforeLoad">
    <div class="detail-conatiner">
        <button class="product-page-back">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.5 19L8.5 12L15.5 5" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
        </button>
        <div class="selected-food-image">
            <img src="./images/food4.png" alt="Potgrasso Food Image">
        </div>
        <div class="food-content">
            <h1>Argular Salad</h1>
            <p class="food-ingredients">with Green Apple, Goat cheese and Salmon</p>
            <div class="food-description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse minima recusandae quaerat labore consequuntur officiis, harum ipsam necessitatibus sequi optio omnis consequatur voluptatibus quas ratione perspiciatis eos unde quisquam voluptatum placeat? Deleniti, eaque consectetur? Corrupti, pariatur quae voluptatibus nisi debitis nam voluptatem consectetur atque quas a iste officiis ducimus quam laborum, eum ipsa soluta laudantium, aliquam doloribus odio? Magnam eveniet, at architecto doloribus facilis minima.
            </div>
            <div class="kal-counter">
                <div class="kal">
                    <p>Calories</p>
                    <h4 class="nutrion-counter-values">103Kal</h4>
                </div>
                <div class="fat">
                    <p>Fat</p>
                    <h4 class="nutrion-counter-values">10g</h4>
                </div>
                <div class="Carbs">
                    <p>Carbs</p>
                    <h4 class="nutrion-counter-values">45g</h4>
                </div>
            </div>
            <button class="add-to-cart">
                <span>Rs.350</span>
                Buy Now
            </button>
        </div>
    </div>
</section>
<div class="product-preload-green beforeLoad"></div>
<section class="signup-form beforeLoad">
    <div class="mx-auto form-container">
        <form class="form-content" action="" method="POST">
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
<script src="./scripts/app.js"></script>
<script src="./scripts/product-opener.js"></script>
<script src="./scripts/signup-form-opener.js"></script>
<script src="./scripts/product-page-jquery.js"></script>
<script type="text/javascript">
    // let splittedUrl = window.location.href.split('?')
    let sessionUsername = '<?php echo $_SESSION['sessionUser']; ?>'

    if (sessionUsername) {
        $('.customer-profile').addClass('loadCustomerProfile')
    }
</script>
</body>

</html>