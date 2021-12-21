<?php
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: *");
header('Access-Control-Allow-Credentials: true');


header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET, POST, DELETE, OPTIONS");
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
