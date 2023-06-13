<?php
require_once('../db_connect.php');

$facts_title = $_POST['facts_title'];
$facts_icon = $_POST['facts_icon'];
$facts_qty = $_POST['facts_qty'];
$facts_status = $_POST['facts_status'];

$facts_insert_query = "INSERT INTO facts(facts_title,facts_icon,facts_qty,facts_status) VALUES ('$facts_title', '$facts_icon', '$facts_qty', '$facts_status')";
$facts_insert_query_execution = mysqli_query($db_connect, $facts_insert_query);
header('location: ./add_facts.php');


?>