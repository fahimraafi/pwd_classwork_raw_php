<?php 
require_once('backend/signup_login_header.php');
?>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune</a>
            </div>
            <p class="auth-description">Please sign-in to your account and continue to the dashboard.<br>Don't have an account? <a href="signup.php">Sign Up</a></p>

            <!-- Sign Up Success notification start -->
            <?php 
            if (isset($_SESSION["data_inserted"])):
            ?>
                <div class="alert alert-success mt-4">
                    <?=$_SESSION["data_inserted"];?>
                </div>
            <?php endif; ?>
            <!-- Sign Up Success notification end -->

            <form action="login_post.php" method="post">
                <div class="auth-credentials m-b-xxl">
                    <label for="signInEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control m-b-md" id="signInEmail" aria-describedby="signInEmail" placeholder="example@neptune.com" name="email" value="<?php 
                    if (isset($_SESSION['inserted_email'])) {
                        echo $_SESSION['inserted_email'];
                    }
                    ?>">

                    <!-- Email input missing error start -->
                    <?php
                        if (isset($_SESSION["email_error"])):
                    ?>

                        <div class="alert alert-danger mt-3">
                            <?=$_SESSION["email_error"]; ?>
                        </div>
                        
                    <?php endif; ?>
                    <!-- Email input missing error end -->

                    <label for="signInPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" id="signInPassword" aria-describedby="signInPassword" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password">

                    <!-- Password input missing error start -->
                    <?php
                    if (isset($_SESSION["password_error"])):
                    ?>

                    <div class="alert alert-danger mt-3">
                        <?=$_SESSION["password_error"]; ?>
                    </div>
                    
                    <?php endif; ?>
                    <!-- Password input missing error end -->

                    <!-- login failure error start -->

                    <?php
                    if (isset($_SESSION['login_error'])):
                    ?>

                    <div class="alert alert-danger mt-3">
                        <?=$_SESSION['login_error']; ?>
                    </div>
                    
                    <?php endif; ?>

                    <!-- login failure error end -->
            
                    <div class="auth-submit mt-4">
                        <button class="btn btn-primary" type="submit" >Log In </button>
                    </div>
                    <div class="divider"></div>
                </div>

            </form>
                        
        </div>
        </div>

<?php 
require_once('backend/signup_login_footer.php');
?>
    