<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .parent {
            background-color: cyan;
            margin: 10px;
            width: 200px;
            display: inline-block;

        }

        /* img{
                width: 100%;
                height: 20px;
             } */
    </style>


</head>

<body>

</body>

</html>

<?php

include "authguard.php";

include "../Shared/connection.php";

$sql_result = mysqli_query($conn, "select * from product where owner=$_SESSION[userid]");

while ($dbrow = mysqli_fetch_assoc($sql_result)) {
    //   print_r($dbrow);
    //   echo "<br>";

    echo "<div class='parent'>
           <div>$dbrow[name]</div>
           <div>$dbrow[price]</div>
           <img src='$dbrow[impath]'>
           <div>$dbrow[detail]</div>

           <div class='action'>
           <button>Edit</button>
           <a href='deletepdt.php?pid=$dbrow[pid]'><button>Delete</button></a>
           </div>

</div>";

}




?>