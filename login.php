<?php

    require 'connection.php';
    $email=$_POST['email'];
    $password=$_POST['password'];

    $checkUser="SELECT * FROM user WHERE email='$email' and password='$password'";
    $result=mysqli_query($con,$checkUser);

    if(mysqli_num_rows($result)>0)
    {
        $response['error']="000";
        $response['message']="Login Success";
        
    }
    else
    {
        $response['error']="001";
        $response['message']="login failed";
    }

    echo json_encode($response);


?>