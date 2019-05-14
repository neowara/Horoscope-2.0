<?php session_start();?>
    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Horoscope</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Stalemate" rel="stylesheet">    
</head>
<body>

<div class="container">
    <img src="./img/horoscope.png" alt="">
    <h1>Horoscope</h1>
    <p>The position of the stars and planets will not affect your life, in any way, shape or form, what so ever but go ahead anyway.</p>

    <h3>Write your date of birth:</h3><br>
    <input type="date" id="date"><br>
    <br>
    <button onclick="addHoroscope()" id="saveButton">Show your horoscope</button><br>
    <button onclick="" id="updateButton">Update</button><br>
    <button onclick="deleteHoroscope()" id="deleteButton">Delete</button><br>

<div class="result"></div>
</div>
<script src="./js/script.js"></script>
</body>
</html>
