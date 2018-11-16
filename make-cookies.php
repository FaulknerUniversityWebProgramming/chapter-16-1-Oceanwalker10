<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // add 1 day to the current time for the expiry time
        $expiryTime = time() + 60 * 60 * 24;
        
        setcookie("Theme", $_POST['theme'], $expiryTime);
        setcookie("Philosopher", $_POST['philosopher'], 0);
        
        header("Location: chapter16-project1.php");
    }
?>