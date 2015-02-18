<html>
    <head>
        <title>Jill's List</title>
        <link rel="stylesheet" type="text/css" href="css/catalist.css">
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap-theme.min.css">
        
        <?php
        
        require '../dbconnect.php';
        
        require_once('classes/class_ad.php');
        require_once('classes/class_ad_manager.php');
         
        $adManager = new AdManager($dbc);
        $ads = $adManager->loadAds();
        
        ?>
        
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
    <body>
        <nav class="navbar navbar-default" role="navigation">
        <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        <div class="navbar-brand navbar-brand-centered">Cat-a-list</div>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-brand-centered">
          <ul class="nav navbar-nav">
            <li><a href="/jillslist.php">Home</a></li>
    <!--         <li><a href="/adView.php">Ad Details</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/adCreate.php">Create Ad'</a></li>               
          </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>
        
        <div class="container">
     
            <div class="jumbotron">
                <h1>Welcome to Cat-A-List!</h1>
                <p>Come buy and sell your cats!</p>
            </div>
     
            <table class="table table-striped">
                <?php foreach ($ads as $index => $ad) : ?>
                <tr>
                    <td><a href="adView.php?id=<?= $index; ?>"><?= $ad->title; ?></a></td>
                    <td><?= $ad->name; ?></td>
                    <td><?= $ad->dates; ?></td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>
