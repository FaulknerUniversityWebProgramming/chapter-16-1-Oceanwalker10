<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // add 1 day to the current time for the expiry time
        $expiryTime = time() + 60 * 60 * 24;
        
        setcookie("Theme", $_POST['theme'], $expiryTime);
        $_SESSION['Philosopher'] = $_POST['philosopher'];
        
        header("Location: chapter16-project1.php");
    }
?>