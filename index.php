<?php 
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles.css">
    <title>PHP Blackjack</title>
</head>

<body>
    <?php include('header.php'); ?>
    <h3>Test your luck..play Blackjack!!</h3>
<div>
<form action="drawtwo.php" method="put">
Draw two cards by clicking the button.  <input type="submit" value="Draw">
</div>


</body>    