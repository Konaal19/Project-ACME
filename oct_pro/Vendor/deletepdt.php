<?php

include "authguard.php";
include "../Shared/connection.php";

$pid=$_GET['pid'];

$status=mysqli_query($conn,"delete from product where pid=$pid");
if($status){
    echo "Removed product successfully!!";
    header("location:view.php");
}
else{
    echo "Error in SQL";
    echo mysqli_error($conn);
}



?>