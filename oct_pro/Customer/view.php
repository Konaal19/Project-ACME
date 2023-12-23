<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .parent {
            background-color: cyan;
            margin: 10px;
            width: 200px;
            display: inline-block;
            padding: 20px;
        }
    </style>
</head>

<body>

    <?php

    include "authguard.php";
    include "menu.html";
    include "../Shared/connection.php";

    $sql_result = mysqli_query($conn, "select * from product");

    while ($dbrow = mysqli_fetch_assoc($sql_result)) {

// print_r($dbrow);
// echo '<br>';


        echo "<div class='parent'>
                <div>{$dbrow['name']}</div>
                <div>{$dbrow['price']}</div>
                <img src='{$dbrow['impath']}' > <!-- Added alt attribute -->
                <div>{$dbrow['detail']}</div>
                <div class='action'>
                    
                    <a href='addcart.php?pid={$dbrow['pid']}'><button>Add to Cart</button></a>
                </div>
              </div>";
    }

    ?>

</body>

</html>
