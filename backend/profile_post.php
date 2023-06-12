<?php
session_start();
$db_connect = mysqli_connect('localhost', 'root', '', 'db_web_dev');

// Name change Validation start
if (isset($_POST['name_change'])) {
    $name = $_POST['name'];
    $id = $_SESSION['dash_display_id'];
    $name_change_query = "UPDATE users SET name='$name' WHERE ID='$id'";
    $name_change_query_final = mysqli_query($db_connect, $name_change_query);
    $_SESSION['dash_display_name'] = $name;
    header('location: profile.php');
}
// Name change Validation end

// Profile photo change validation start

if (isset($_POST['photo_change'])) {
    $id = $_SESSION['dash_display_id'];
    $profile_photo_name = $_FILES['photo']['name'];
    $photo_expolode = explode('.', $profile_photo_name);
    $photo_extension = end($photo_expolode);
    $new_photo_name = $id . '.' . $photo_extension;
    $old_location = $_FILES['photo']['tmp_name'];
    $new_location = ('uploads\profile_photos/' . $new_photo_name);
    move_uploaded_file($old_location,$new_location);
    header('Location: profile.php');

    $update_profile_photo_query = "UPDATE users SET profile_photo = '$new_photo_name' WHERE ID = '$id'";
    mysqli_query($db_connect, $update_profile_photo_query);
    header('location: profile.php' ); 
}   

// Profile photo change validation start

// Email change backend start

if (isset($_POST['email_change'])) {
    $email = $_POST['email'];
    $id = $_SESSION['dash_display_id'];
    $email_change_query = "UPDATE users SET email = '$email' WHERE ID = '$id'";
    $email_change_query_final = mysqli_query($db_connect, $email_change_query);
    $_SESSION['dash_display_email'] = $email;
    header('location: profile.php');
}

// Email change backend end

// Password change start
$id = $_SESSION['dash_display_id'];
$email = $_SESSION['dash_display_email'];
$old_encrypted_password = md5($_POST["old_password"]);
$new_password = $_POST['new_password'];
$confirm_new_password = $_POST['confirm_new_password'];
$pregma = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $new_password);

if (isset($_POST['password_change'])) {
    $old_password_check_query = "SELECT COUNT(*) AS 'password_check' from users WHERE password = '$old_encrypted_password' AND ID = '$id'";
    $old_password_check_query_execution = mysqli_query($db_connect,$old_password_check_query);
    $old_password_check_assoc = mysqli_fetch_assoc($old_password_check_query_execution)['password_check'];

    
    if ($old_password_check_assoc == 1) {
        if ($new_password == $confirm_new_password) {
            if ($pregma == 1) {
                $new_encrypted_password = md5($new_password);
                $password_update_query = "UPDATE users SET password = '$new_encrypted_password' WHERE ID = '$id'";
                $password_update_query_execution = mysqli_query($db_connect, $password_update_query);
                $_SESSION["password_changed"] = "Your password has been changed";
                header('location: profile.php');
            }
            else {
                $_SESSION["pass_req_error"] = "Your password does not match the Requirements";
                header('location: profile.php');
            }
        }
        else {
            $_SESSION["new_password_mismatch"] = "New password does not match";
            header('location: profile.php');
        }
    }
    else {
        $_SESSION["old_password_mismatch"] = "Your old password does not match";
        header('location: profile.php');
    }
}


// Password change end



?>