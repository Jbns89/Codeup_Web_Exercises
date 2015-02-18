<?php
 
require '../dbconnect.php';

require_once('classes/class_ad.php');
 
$adId = $_GET['id'];
$ad = new adManager($dbc,$adId);
 
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>Super Ad Site</title>
 
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
  </head>
    <body>
    <div class="container">
        <h1><?= htmlspecialchars($ad->title); ?></h1>
        <p>Posted at: <?= htmlspecialchars($ad->dates); ?></p>
        <p><?= htmlspecialchars($ad->body); ?></p>
        <h2>Contact Info:</h2>
        <p>
            <?= htmlspecialchars($ad->name); ?><br>
            <a href="mailto:<?= htmlspecialchars($ad->email); ?>"><?= htmlspecialchars($ad->email); ?></a>
        </p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
