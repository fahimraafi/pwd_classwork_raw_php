<?php 
session_start();
require_once('../db_connect.php');

$portfolio_category = $_POST['portfolio_category'];
$portfolio_title = $_POST['portfolio_title'];
$portfolio_image = $_FILES['portfolio_image'];
$portfolio_status = $_POST['portfolio_status'];

// $portfolio_insert_query = "INSERT INTO portfolios(portfolio_category, portfolio_title, portfolio_image, portfolio_status) VALUES ('$portfolio_category','$portfolio_title','$portfolio_image','$portfolio_status')";
// $portfolio_insert_query_execution = mysqli_query($db_connect,$portfolio_insert_query);

if ($portfolio_category && $portfolio_title && $portfolio_image) {
    $portfolio_image_array = explode(".", $portfolio_image['name']);
    $portfolio_image_extension = end($portfolio_image_array);
    $portfolio_image_new_name = date("Ymd_") . time() . "." . $portfolio_image_extension;
    $old_path = $portfolio_image["tmp_name"];
    $new_path = ('D:\xampp\htdocs\web dev class 24\backend\uploads\portfolio_images/' . $portfolio_image_new_name);
    move_uploaded_file($old_path, $new_path);


    $portfolio_insert_query = "INSERT INTO portfolios(portfolio_category, portfolio_title, portfolio_image, portfolio_status) VALUES ('$portfolio_category','$portfolio_title','$portfolio_image_new_name','$portfolio_status')";
    $portfolio_insert_query_execution = mysqli_query($db_connect,$portfolio_insert_query);
}
else {
    $_SESSION["portfolio_data_insert_error"] = "Please fill all Portfolio Information";
    header('location: add_portfolio.php');
}



?>