<?php

    require 'connection.php';
    $current=$_POST['current']; //add md5 if encoded
    $new=$_POST['new']; //add md5 if encoded
    $email=$_POST['email'];

    $checkUser="SELECT * FROM user WHERE email='$email' and password='$current'";
    $result=mysqli_query($con,$checkUser);

    //to check id user exists or not
    $checkUser2 = "SELECT * from user WHERE email='$email'";
    $checkQuery = mysqli_query($con,$checkUser);

    if(mysqli_num_rows($checkQuery)>0)
    {
        if(mysqli_num_rows($result)>0)
        {
            $updatePassQuery=mysqli_query($con,"UPDATE user SET password='$new' WHERE email='$email'");
            if($updatePassQuery>0)
            {
                $response['error']="000";
                $response['message']="password update success";
            }
            else{
                $response['error']="200";
                $response['message']="pass update failed";
            }
        }
        else{
            $response['error']="400";
            $response['message']="user does not exist";
        }
       
    }

    else{
            $response['error']="400";
            $response['message']="user does not exist";

    }


   

    echo json_encode($response)
    



?>
