<?php
// $conn = mysqli_connect("http://185.27.134.10/", "b24_34352319", "shopbansach", "b24_34352319_quanllibansach");
$conn = mysqli_connect("localhost", "root", "", "quanllibansach");
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());
}
function chin($gabriel){
    echo $gabriel;exit;
}
        // echo '<pre>';
        // print_r($_SESSION['amount']);
        // echo '</pre>';    //in mảng
?>
