<?php

require '../dbconnect.php'; 

require_once('classes/class_ad.php');
 
if (!empty($_POST))
{
    // load existing ads
    $adManager = new AdManager();
    
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
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
  <body role="document">
 
    <div class="container">
        <h1>Create a New Ad</h1>
        <form role="form" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="6"></textarea>
            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <a href="jillslist.php" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary">Create Ad</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
 
  </body>
</html>
