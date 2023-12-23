<?php


$conn=new mysqli("localhost","root","","e-commerce",3306);
if($conn->connect_error){
    echo "Connection Failed";
    die;
}


?>