<?php

require('db.php');
$_POST = json_decode(file_get_contents("php://input"), true);

$id = $_POST['id'];
$res = mysqli_query($con, "SELECT * FROM user_details WHERE id = '$id' ");
// $rows = mysqli_num_rows($res);
while ($row = mysqli_fetch_assoc($res)) {

     echo json_encode($row);
}

// echo json_encode(array("status" => "OK", 'userId' => $GET));
