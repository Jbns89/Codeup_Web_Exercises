<?php
 
require '../dbconnect.php';
 
require_once('classes/class_ad.php');
require_once('classes/class_ad_manager.php');
 
$adId = $_GET['id'];
$ad = new Ad($dbc, $adId);
 
if (!empty($_POST)) 
{
    $ad->title = $_POST['title'];
    $ad->body = $_POST['body'];
    $ad->name = $_POST['name'];
    $ad->email = $_POST['email'];
 
    // save all ads
    $ad->save();
 
    // redirect to ad show view
    header('location: adView.php?id=' . $ad->id);
    exit;
}
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 
    <title>Cat-A-List</title>
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
  </head>
  <body role="document">
    <div class="container">
        <h1>Create Ad</h1>
        <form role="form" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" value="<?= $ad->title; ?>" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="6"><?= $ad->body; ?></textarea>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" value="<?= $ad->name; ?>" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" value="<?= $ad->email; ?>" class="form-control" id="email" name="email">
            </div>
            <a href="jillslist.php" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary">Update Ad</button>
        </form>
    </div>
  </body>
</html>
