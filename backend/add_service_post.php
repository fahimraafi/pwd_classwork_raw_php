<?php
$db_connect = mysqli_connect('localhost', 'root', '', 'db_web_dev');

$service_name = $_POST['service_name'];
$service_description = $_POST['service_description'];
$service_icon = $_POST['service_icon'];
$service_status = $_POST['service_status'];


$service_insert_query = "INSERT INTO services (service_name,service_description,service_icon,service_status) VALUES('$service_name', '$service_description', '$service_icon' , '$service_status')";
mysqli_query($db_connect, $service_insert_query);
header('location: add_service.php');

?>