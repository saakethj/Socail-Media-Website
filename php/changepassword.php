<?php
session_start();
include("login.php");
$host = "localhost:4306";
$dbusername = "root";
$dbpassword = "";
$dbname = "social_media";

$con = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
if (isset($_POST['Submit'])) {
    $oldpass = $_POST['currentpassword'];
    // $useremail = $_SESSION['email'];
    $newpassword = $_POST['newpassword'];
    $sql = mysqli_query($con, "SELECT password FROM signup where password='$oldpass'");
    $num = mysqli_fetch_array($sql);
    if ($num > 0) {
        $con = mysqli_query($con, "update signup set password='$newpassword' where password = '$oldpass'");
        echo '<script>alert("password change successfully")</script>';
    } else {
        echo '<script>alert("Password has not changed")</script>';
    }
}
?>