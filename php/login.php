<?php

$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'pass');

if(!empty($email) || !empty($password)){

    $host = "localhost:4306";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "social_media";

    $con = mysqli_connect($host, $dbusername, $dbpassword, $dbname);
    $sql = "SELECT id FROM signup WHERE email = '$email' and password='$password'";

    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($res, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($res);
    if($count == 1){
        header('Location: homepage.php');
    }
    else{
        $error = "invallid username or password";
    }

}
?>