<?php
    session_start();
    session_destroy();
    echo "Berhasil Logout. Login lagi? <a href='login.php'> YA </a>";
?>