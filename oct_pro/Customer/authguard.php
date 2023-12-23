<?php

session_start();


if (!isset($_SESSION['login_status']) || !isset($_SESSION['usertype']) ) {
    echo "Login skipped,Please login first";
    die;
}

if ($_SESSION['login_status'] == false) {
    echo "Forbidden Access";
    die;
}

if ($_SESSION['usertype'] != 'Customer') {
    echo "Unauthorized Access";
    die;
}

echo "<div style ='display:flex;justify-content:space-around;background-color:bisque'>
         <div>$_SESSION[usertype]</div>
         <div>$_SESSION[userid]</div>
      
         <div>
         <a href='../Shared/logout.php'>Log Out</a>
         </div>
</div>";

// : $_SESSION[username]


?>