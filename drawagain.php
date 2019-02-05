<?php

session_start();
require 'vendor/autoload.php';
include 'functions.php';

$client = new \GuzzleHttp\Client();
$card_array = $_SESSION['card_array'];
$deck_id = $_SESSION['deck_id'];

$response = $client->request('GET', 'https://deckofcardsapi.com/api/deck/'.$deck_id.'/draw/?count=1');
$response_data = json_decode($response->getBody(), TRUE);
$card_array[] = $response_data['cards'][0];

$_SESSION['card_array'] = $card_array;
$_SESSION['deck_id'] = $response_data['deck_id'];
$card_total = calc_card_total($card_array);


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
    <br><br>
    <?php foreach($card_array as $card) : ?>
       <img src="<?php echo $card['image'];?>">
   <?php endforeach; ?>

   <h1><?php echo "Your card total is $card_total"; ?></h1>

   <?php if($card_total > 21): ?>
       Sorry your total is above 21
       <a href="index.php">Play Again</a>
   <?php elseif($card_total == 21): ?>
       You win, take a trip to Vegas
       <a href="index.php">Play Again</a>
   <?php else: ?>
       <input href="drawagain.php" value="draw again">
   <?php endif; ?>


</body>