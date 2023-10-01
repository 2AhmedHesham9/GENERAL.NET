<?php

include("conn.php");
if(isset($_GET['id']))
{
    $currency=$_GET['id'];
    $sql="DELETE FROM currency WHERE id='$currency'";
    $result=$conn->query($sql);
    if($result==TRUE)
    {
       
        header("location:viewpage.php");
        echo '<script>alert("Currency deleted")</script>';
    }
    else
    {
        echo "Error:" . $sql . "<br>" . $conn->error;
    }
}