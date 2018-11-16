<?php
//    unset($_COOKIE['Theme']);
    setcookie("Theme", "",  time() - 1);
//    unset($_COOKIE['Philosopher']);
    setcookie("Philosopher", "",  time() - 1);
    
    header("Location: chapter16-project1.php");
?>