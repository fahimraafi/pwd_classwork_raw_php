<?php
session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);


$flag = false;

if ($email) {
    $_SESSION['inserted_email'] = $email;
    if ($password) {
         
    } else {
        $flag = true;
        $_SESSION["password_error"] = "Please enter your password";
    }
} else {
    $flag = true;
    $_SESSION["email_error"] = "Please input your email address";
}

if ($flag == 1) {
    header("location: login.php");
} else {
    $db_connect = mysqli_connect('localhost', 'root', '', 'db_web_dev');
    $count_query = "SELECT COUNT(*) AS 'results' FROM users WHERE email='$email' AND password='$password'";

    $final_login = mysqli_query($db_connect, $count_query);


    $after_assoc = mysqli_fetch_assoc($final_login)['results'];
    print_r($after_assoc);

    if ($after_assoc == 1) {
        header("location: backend/dashboard.php");
        $_SESSION['dash_display_email'] = "$email";
        $select_dash_display_query = "SELECT ID,name FROM users WHERE email='$email'";
        $final_dash_display = mysqli_query($db_connect, $select_dash_display_query);
        $after_dash_dispaly_assoc = mysqli_fetch_assoc($final_dash_display);
        $_SESSION['dash_display_id'] = $after_dash_dispaly_assoc['ID'];
        $_SESSION['dash_display_name'] = $after_dash_dispaly_assoc['name'];


    } else {
        $_SESSION['login_error'] = "Your credentials don't match";
        header("location: login.php");
    }
}


?>