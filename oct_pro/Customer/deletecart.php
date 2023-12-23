<?php
include "authguard.php";
include "../Shared/connection.php";

$cartid=$_GET['cartid'];
$status=mysqli_query($conn ,"delete from cart where cartid=$cartid");
if($status) {
    echo "Item removed from the CART";
    header("location:viewcart.php");
}
else{
    echo mysqli_error($conn);
}


?>