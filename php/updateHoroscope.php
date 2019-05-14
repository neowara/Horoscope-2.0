<?php 
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if(isset($_POST["selectedDate"]) && (isset($_SESSION['horoscope']))) {
        unset($_SESSION['horoscope']);
        $selectedDate = $_POST["selectedDate"];
        include_once('./db.php');
        $database = new Database();
        $sql = "SELECT * FROM horoscopesigns WHERE (startDate <= '$selectedDate') AND (endDate >= '$selectedDate')";
        $query = $database->connection->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();
        $_SESSION['horoscope'] = $result;
        echo json_encode(true);

    } else {
        echo json_encode(false);
    }
}
?>