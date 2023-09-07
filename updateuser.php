<?php

    require 'connection.php';
    $id=$_REQUEST['id'];
    $username=$_POST['username'];
    $email=$_POST['email'];

    $updateQuery = "UPDATE user SET username='$username',email='$email' WHERE id='$id'";
    $result=mysqli_query($con,$updateQuery);

    if($result>0)
    {
        $response['error']="000";
        $response['message']="user update success";
    }
    else
    {
        $response['error']="002";
        $response['message']="user update failed";
    }

    echo json_encode($response);
    
?>