<?php 
session_start();
// require_once('../db_connect.php');
$db_connect = mysqli_connect('localhost', 'root', '', 'db_web_dev');

$portfolio_category = $_POST['portfolio_category'];
$portfolio_title = $_POST['portfolio_title'];
$portfolio_image = $_FILES['portfolio_image'];
$portfolio_status = $_POST['portfolio_status'];


if ($portfolio_category && $portfolio_title && $portfolio_image) {
    $portfolio_image_array = explode(".", $portfolio_image['name']);
    $portfolio_image_extension = end($portfolio_image_array);
    $portfolio_image_new_name = date("Ymd") . "_" . time() . "." . $portfolio_image_extension;
    $old_path = $portfolio_image["tmp_name"];
    $new_path = ('D:\xampp\htdocs\web dev class 24\backend\uploads\portfolio_images/' . $portfolio_image_new_name);
    move_uploaded_file($old_path, $new_path);

    $portfolio_insert_query = "INSERT INTO `portfolios`(`portfolio_category`, `portfolio_title`, `portfolio_image`, `portfolio_status`) VALUES ('$portfolio_category','$portfolio_title','$portfolio_image_new_name','$portfolio_status')";
    mysqli_query($db_connect, $portfolio_insert_query);
    $_SESSION["portfolio_upload_successfull"] = "Your portfolio has been uploaded successfully";
    header('Location: add_portfolio.php');
}
else {
    $_SESSION["portfolio_data_insert_error"] = "Please fill all Portfolio Information";
    header('location: add_portfolio.php');
}



?>