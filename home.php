<?php
    session_start();
    echo "Welcome ".$_SESSION['username'];
    echo "<br><a href='logout.php'>LOGOUT</a> ";
?>