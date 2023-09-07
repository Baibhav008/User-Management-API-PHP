<?php

    require 'connection.php';
    $id=$_POST['id'];

    $deleteuser = mysqli_query($con,"DELETE FROM user WHERE id='$id'");

    if($deleteuser>0)
    {
        $response['error']="000";
        $response['message']="Account has been deleted successfully";
    }
    else
    {
        $response['error']="400";
                $response['message']="deletion failed";
    }

    echo json_encode($response);


?>