<?php 
session_start();

if($_SERVER["REQUEST_METHOD"] == "DELETE" && isset($_SESSION['horoscope'])) {
    session_destroy();    
    echo json_encode(true);
} else if ($_SESSION['horoscope'] == NULL) {
    console.log("Session already empty");
} else {
        echo json_enconde(false);
    }
?>