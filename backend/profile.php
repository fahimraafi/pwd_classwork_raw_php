<?php
require_once('header.php');
?>

<div class="row">
    <div class="col-lg-6">
        <div class="card widget widget-status">
            <div class="card-header mt-4" style="font-size: 25px">
                Name Change
            </div>
            <div class="card-body">
                <form action="profile_post.php" method="post">

                    <h2 style="font-size: 20px">
                        Name: <?= $_SESSION['dash_display_name']; ?>
                    </h2>
                    <input class="form-control form-control-lg m-b-sm mt-4" type="text" placeholder="Enter New Name" name="name">
                    <button class="btn btn-success m-auto text-center mt-2 mb-5" type="submit" name="name_change">
                        Change Name
                    </button>

                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card widget widget-status">
            <div class="card-header mt-4" style="font-size: 25px">
                Email Change
            </div>
            <div class="card-body">
                <form action="profile_post.php" method="post">

                    <h2 style="font-size: 20px">
                        Email: <?= $_SESSION['dash_display_email']; ?>
                    </h2>
                    <input class="form-control form-control-lg m-b-sm mt-4" type="email" placeholder="Enter New Email" name="email">
                    <button class="btn btn-success m-auto text-center mt-2 mb-5" type="submit" name="email_change">
                        Change Email
                    </button>

                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card widget widget-status">
            <div class="card-header" style="font-size: 25px">
                Profile Picture Change
            </div>
            <div class="card-body">
                <form action="profile_post.php" method="post" enctype="multipart/form-data">
                    <img src="uploads/profile_photos/<?= $profile_photo; ?>" alt="default_photo" width="185">
                    <input class="form-control form-control-lg m-b-sm mt-2" type="file" name="photo">
                    <button class="btn btn-success m-auto text-center mt-5" type="submit" name="photo_change">
                        Change Photo
                    </button>

                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card widget widget-status">
            <div class="card-header mt-4" style="font-size: 25px">
                Password Change
            </div>
            <!-- Password Change successful message start -->
            <?php
            if (isset($_SESSION["password_changed"])) :
            ?>

                <div class="alert alert-success">
                    <?= $_SESSION["password_changed"]; ?>
                </div>

            <?php endif; ?>
            <!-- Password Change successful message end -->
            <div class="card-body">
                <form action="profile_post.php" method="post">

                    <input class="form-control form-control-lg m-b-sm mt-4" type="password" placeholder="Enter Old Password" name="old_password">

                    <!-- Old password error message -->
                    <?php
                    if (isset($_SESSION["old_password_mismatch"])) :
                    ?>

                        <div class="alert alert-danger">
                            <?= $_SESSION["old_password_mismatch"]; ?>
                        </div>

                    <?php endif; ?>
                    <!-- Old password error message -->

                    <input class="form-control form-control-lg m-b-sm mt-4" type="password" placeholder="Enter New Password" name="new_password">

                    <input class="form-control form-control-lg m-b-sm mt-4" type="password" placeholder="Confirm New Password" name="confirm_new_password">

                    <!-- New password error message -->
                    <?php
                    if (isset($_SESSION["new_password_mismatch"])) :
                    ?>

                        <div class="alert alert-danger">
                            <?= $_SESSION["new_password_mismatch"]; ?>
                        </div>

                    <?php endif; ?>
                    <!-- New password error message -->

                    <!-- password requirement error message -->
                    <?php
                    if (isset($_SESSION["pass_req_error"])) :
                    ?>

                        <div class="alert alert-danger">
                            <?= $_SESSION["pass_req_error"]; ?>
                        </div>

                    <?php endif; ?>
                    <!-- password requirement error message -->


                    <button class="btn btn-success m-auto text-center mt-2 mb-5" type="submit" name="password_change">
                        Change Password
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>


<?php
require_once('footer.php');
?>