<?php

// taking data from input fields
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$email = filter_input(INPUT_POST, 'email');
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');

if(!empty($email) || !empty($username) || !empty($password)){
    $host = "localhost:4306";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "social_media";

    //creating connection
    $con = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if(mysqli_connect_error()){
        die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
    }
    else{

        // sql query for inserting data in database
        $sql = "INSERT INTO signup (first_name, last_name, email, username, password)
        values ('$fname', '$lname', '$email', '$username','$password')";

        if($con -> query($sql)){
            echo "New recod is inserted successfully";
        }
        else{
            echo "Error: ". $sql ."
            ". $con->error;
        }
        $con->close();
    }
}
else{
    echo 'Email or password or username is empty';
    die();
}
?>