<?php

include "authguard.php";
include "../Shared/connection.php";
$userid=$_SESSION['userid'];

$pid=$_GET['pid'];
$status=mysqli_query($conn,"insert into cart(userid,pid)values($userid,$pid)");
if($status){
    echo "Product added to a cart successfully";
    header("location:viewcart.php");
}
else{
    echo mysqli_error($conn);
}

?>