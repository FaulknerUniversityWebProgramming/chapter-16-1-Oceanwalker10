<?php
//    unset($_COOKIE['Theme']);
    setcookie("Theme", "", -1000);
//    unset($_COOKIE['Philosopher']);
    setcookie("Philosopher", "", -1000);
    
    header("Location: chapter16-project1.php");
?>