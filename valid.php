<?php
    $pass = "12345";
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if( $password == $pass){
            echo" Password Benar";
            setcookie('username', $username, time());
            session_start();
            $_SESSION['username'] = $username;
            header("location: home.php");
            
        }else{
            echo"Password Salah<br> <a href='login.php'>Coba Lagi</a>";
        }
    }else{
        header("location: login.php");
    }
?>