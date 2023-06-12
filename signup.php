<?php 
require_once('backend/signup_login_header.php');
?>
        <div class="app-auth-container">
            <div class="logo">
                <a href="index.html">Neptune - Replicated by Fahim Uddin Raafi</a>
            </div>
            <p class="auth-description">Please enter your credentials to create an account.<br>Already have an account? <a href="login.php">Sign In</a></p>

            <div class="auth-credentials m-b-xxl">
                <form action="signup_post.php" method="post">
                    <label for="signUpUsername" class="form-label">Name</label>
                    <input type="name" class="form-control m-b-md" placeholder="Enter Name" name="name" value="<?php 
                    if (isset($_SESSION['inserted_name'])) {
                        echo $_SESSION['inserted_name'];
                    }
                    ?>">
                    
                    <!-- Name input missing error start -->
                    <?php
                    if (isset($_SESSION["name_error"])):
                    ?>

                    <div class="alert alert-danger">
                        <?= $_SESSION["name_error"]; ?>
                    </div>
                    
                    <?php endif; ?>
                    <!-- Name input missing error end -->

                    <label for="signUpEmail" class="form-label">Email address</label>
                    <input type="email" class="form-control m-b-md" placeholder="example@neptune.com" name="email" value="<?php 
                    if (isset($_SESSION['inserted_email'])) {
                        echo $_SESSION['inserted_email'];
                    }
                    ?>">
                    
                    <!-- Email input missing error start -->
                    <?php
                    if (isset($_SESSION["email_error"])):
                    ?>

                    <div class="alert alert-danger">
                        <?=$_SESSION["email_error"]; ?>
                    </div>
                    
                    <?php endif; ?>
                    <!-- Email input missing error end -->

                    <!-- Email duplicate error start -->
                    <?php
                    if (isset($_SESSION["duplicate_email"])):
                    ?>

                    <div class="alert alert-danger">
                        <?=$_SESSION["duplicate_email"]; ?>
                    </div>
                    
                    <?php endif; ?>
                    <!-- Email duplicate error end -->

                    <label for="signUpPassword" class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password" value="<?php 
                    if (isset($_SESSION['inserted_password'])) {
                        echo $_SESSION['inserted_password'];
                    }
                    ?>">
                    
                    <!-- Password input missing error start -->
                    <?php
                    if (isset($_SESSION["password_error"])):
                    ?>

                    <div class="alert alert-danger">
                        <?=$_SESSION["password_error"]; ?>
                    </div>
                    
                    <?php endif; ?>
                    <!-- Password input missing error end -->

                    <label for="signUpPassword" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="confirm_password">
                    
                    <!-- Confirm Password input missing error start -->
                    <?php
                    if (isset($_SESSION["confirm_password_error"])):
                    ?>

                    <div class="alert alert-danger">
                        <?=$_SESSION["confirm_password_error"]; ?>
                    </div>
                    
                    <?php endif; ?>
                    <!-- Confirm Password input missing error end -->
                    
                    <!-- Password mismatch error start -->
                    <?php
                    if (isset($_SESSION["password_match_error"])):
                    ?>

                    <div class="alert alert-danger">
                        <?=$_SESSION["password_match_error"]; ?>
                    </div>
                    
                    <?php endif; ?>
                    <!-- Password mismatch error end -->
                    
                    <!-- Pregma password error start -->
                    <!-- <?php
                    if (isset($_SESSION["pregma_match_error"])):
                    ?>

                    <div class="alert alert-danger mt-3">
                        <?=$_SESSION["pregma_match_error"]; ?>
                    </div>
                    
                    <?php endif; ?> -->
                    <!-- Pregma password error end -->

                    <div class="auth-submit mt-4">
                        <button class="btn btn-primary" type="submit" >Sign Up</button>
                    </div>

                    
                </form>
            </div>

            
            <div class="divider"></div>            
        </div>
        </div>
    
<?php 
require_once('backend/signup_login_footer.php');
?>