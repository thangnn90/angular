<?php
/**
 * Created by PhpStorm.
 * User: nguye
 * Date: 12/05/2017
 * Time: 14:02
 */

$serverDB = "46.51.242.216";
$userDB = "hotline";
$passDB = "1qazxsw2";
$DBname = "hotline-lp";

$conn = mysqli_connect($serverDB, $userDB, $passDB, $DBname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from feedback";
$data = array();
$result = mysqli_query($sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} else {
    echo "0 result";
}
echo json_encode($data);
mysqli_close($conn);