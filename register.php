<?php

require('db.php');

$_POST = json_decode(file_get_contents("php://input"), true);

$company = $_POST['userDetails']['company'];
$address = $_POST['userDetails']['address'];
$email = $_POST['userDetails']['email'];
$password = $_POST['userDetails']['password'];

$query = "INSERT INTO user_details (company, address, email, password) VALUES('$company', '$address', '$email', '$password')";
$res = mysqli_query($con, $query);

$userId = mysqli_insert_id($con);

echo json_encode(array("status" => "OK", 'userId' => $company));
