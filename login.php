<?php

// header("Access-Control-Max-Age: 3600");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require('db.php');

$_POST = json_decode(file_get_contents("php://input"), true);

$email = $_POST['email'];
$password = $_POST['password'];

$res = mysqli_query($con, "SELECT * FROM user_details WHERE email = '$email' AND password ='$password' ");
// $rows = mysqli_num_rows($res);
while ($row = mysqli_fetch_assoc($res)) {

	echo json_encode($row);
}
