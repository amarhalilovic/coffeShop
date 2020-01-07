<?php

/*
    Name:          Amar Halilovic
    Course:        CS412 Web Application Development
    Assigment:     Coffe shop 1
    Due Date:      11.1.2020.
    Purpose:       The purpose is to make webpage for coffe shop as project for Web Application Development
 */


$surname = $_POST["lastname"];
$email = $_POST["email"];
$message = $_POST["message"];
$name = $_POST["firstname"];


$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "questions";

$to = 'amar.halil1303@gmail.com';
$subject = 'New question';
$messag = "You got message from " . $name . " " . $surname . ". His/her email is: " . $email . " The message is: " . $message;
$headers = 'From: amar.halil1303@gmail.com';

mail($to, $subject, $messag, $headers);


$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$q = "INSERT INTO `info` (`firstname`, `surname`, `email`, `question`) VALUES ('$name', '$surname', '$email', '$message');";
    if (mysqli_query($conn, $q))

    mysqli_close($conn);


?>

<html>
    <head>
    <title>Submitted</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="stylsheeet.css">
    </head>
    <body>
            <!--Header part with picture of the logo of the coffe-->
    <div id="header" class="row">
        <div class="col-md-3 col-lg-4 col-sm-2 col-xs-1">&nbsp;</div>
        <div class="col-md-8 col-lg-5 col-sm-9 col-xs-12"><img id="logo" class="rounded-circle" src="images/logo.jpg" alt="Logo" height="255px" width="320px"> </div>
        <div class="col-md-3 col-lg-3 col-sm-1 "> &nbsp;</div>
    </div>
    <br><br>

    <h1>Succesfully submitted</h1>
    <a href="index.html"> <button class="btn"><i class="fa fa-home"></i> Home</button> </a>
    </body>
</html>

