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

    $sql_result = mysqli_query($conn, "select * from product where owner=$_SESSION[userid]");

    while ($dbrow = mysqli_fetch_assoc($sql_result)) {
        // Make sure to use single quotes around array keys
        echo "<div class='parent'>
                <div>{$dbrow['name']}</div>
                <div>{$dbrow['price']}</div>
                <img src='{$dbrow['impath']}' > <!-- Added alt attribute -->
                <div>{$dbrow['detail']}</div>
                <div class='action'>
                    <button>Edit</button>
                    <a href='deletepdt.php?pid={$dbrow['pid']}'><button>Delete</button></a>
                </div>
              </div>";
    }

    ?>

</body>

</html>
