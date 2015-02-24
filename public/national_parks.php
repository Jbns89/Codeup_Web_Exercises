<?php

require '../dbconn_natpark.php';

$offset = isset($_GET['offset']) ? intval($_GET['offset']) : 0;


$stmt = $dbc->prepare("SELECT name, location, date_est, area_in_acres FROM nat_parks LIMIT :limits OFFSET :offset");
$stmt->bindvalue(':offset', $offset, PDO::PARAM_INT);
$stmt->bindvalue(':limits', 4, PDO::PARAM_INT);
$stmt->execute();
$nat_parks = $stmt->fetchall(PDO::FETCH_ASSOC);


//Don't need to use a prepare statement here because you 
//don't really need to clean up any information
$row_count = $dbc->query('SELECT count(*) FROM nat_parks');  
$rows = $row_count->fetchColumn();

$getparks = $dbc->prepare("SELECT name, location, date_est, area_in_acres FROM nat_parks LIMIT :limits OFFSET :offset");

if (!empty($_POST)) 
{
    $newParks = [
        htmlspecialchars(strip_tags($_POST['natPark'])),
        htmlspecialchars(strip_tags($_POST['loc'])),
        htmlspecialchars(strip_tags($_POST['date'])),
        htmlspecialchars(strip_tags($_POST['area'])),
        
    ];
    $stmt = $dbc->prepare('INSERT INTO nat_parks (name, location, date_est, area_in_acres, description) VALUES (:name, :loc, :est, :area, :descr)');

    foreach ($nat_parks as $park) 
    {
        $stmt->bindValue(':name',  $_POST['natPark'],  PDO::PARAM_STR);
        $stmt->bindValue(':loc',  $_POST['loc'],  PDO::PARAM_STR);
        $stmt->bindValue(':est',  $_POST['date'],  PDO::PARAM_STR);
        $stmt->bindValue(':area',  $_POST['area'],  PDO::PARAM_INT);

        $stmt->execute();

    }
}   
?>

<!doctype html>
<html>
<head>
    <title>National Parks!</title>
    
    <link rel="stylesheet" type="text/css" href="/css/parks.css">
    <link href='http://fonts.googleapis.com/css?family=Patrick+Hand|Walter+Turncoat|Rancho' rel='stylesheet' type='text/css'>    
</head>
<body>
    <h1>National Parks</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Location</th>
            <th>Date Est.</th>
            <th>Area (acres)</th>
        </tr>
        <?php foreach ($nat_parks as $park): ?>
        <tr>
            <td><?= $park['name'];?><br></td>
            <td><?= $park['location'];?><br></td>
            <td><?= $park['date_est'];?><br></td>
            <td><?= $park['area_in_acres'];?><br></td>
        </tr>
        <?php endforeach;?>
        <?php if ($offset + 4 < $rows) : ?>
            <div class="right"><a class="buttons next" href= "?offset=<?=$offset+4?>"type="btn">>></a></div>
        <?php endif;?>

        <?php if ($offset > 0) : ?>
            <div class="left"><a class="buttons previous" href="?offset=<?=$offset-4?>"type="btn"><<</a></div>
        <?php endif;?>
    </table>
    <h2>Add A National Park</h2>
    <form method='POST' action='national_parks.php'>
        <div class="input_area">
            <label for="natPark">National Park:</label>
            <input class="input_tag" required name="natPark" type="text" placeholder="What's the name of the park?">

            <label for="loc">Location:</label>
            <input class="input_tag" required name="loc" type="text" placeholder="Where is the park?">
        </div>
        <div class="input_area">
            <label for="date">Date Established:</label>
            <input class="input_tag" required name="date" type="text" placeholder="When was it established">

            <label for="area">Park Area:</label>
            <input class="input_tag" required name="area" type="text" placeholder="What is the park area in acres?">
        </div>
        <button type="submit">Send</button>
    </form>
</body>
</html>

