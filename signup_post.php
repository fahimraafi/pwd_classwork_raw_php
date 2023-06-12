<?php
session_start();

$name = $_POST['name'];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

$flag = false;
$pregma = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $password);

if ($name) {
    $_SESSION['inserted_name'] = $name;
    if ($email) {
        $_SESSION['inserted_email'] = $email;
        if ($password) {
            $_SESSION['inserted_password'] = $password;
            if (!$confirm_password) {
                $_SESSION["confirm_password_error"] = "Please confirm your password";
                $flag = true;
            }
            if ($password != $confirm_password) {
                $_SESSION["password_match_error"] = "Your password does not match";
                $flag = true;
            } else {
                if ($pregma != 1) {
                    $flag = true;
                    $_SESSION["password_match_error"] = "Your password does not meet the minimum requirements";
                }
            }
        } else {
            $flag = true;
            $_SESSION["password_error"] = "Please enter your password";
        }
    } else {
        $flag = true;
        $_SESSION["email_error"] = "Please input your email address";
    }
} else {
    $flag = true;
    $_SESSION["name_error"] = "Please enter a name";
}

if ($flag == 1) {
    header('location: signup.php');
} else {
    $encrypt_password = md5($password);
    $db_connect = mysqli_connect('localhost', 'root', '', "db_web_dev");

    $email_validation_query = "SELECT COUNT(*) AS 'validation' FROM users WHERE email= '$email'";
    $email_validation_query_final = mysqli_query($db_connect, $email_validation_query);
    $email_validation_assoc = mysqli_fetch_assoc($email_validation_query_final) ['validation'];
    if ($email_validation_assoc != 0) {
        header('location: signup.php');
        $_SESSION['duplicate_email'] = "$email already exists";
        
    }
    else {
        $insert_query = "INSERT INTO users (name, email, password) VALUES('$name', '$email', '$encrypt_password')";
        mysqli_query($db_connect, $insert_query);
        $_SESSION["data_inserted"] = "$name you signed up successfully";
        header('location: login.php');
    }
    
    
}
