<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'Jill', 'Jeremiah20:9');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = 'CREATE TABLE nat_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_est DATE,
    area_in_acres FLOAT(10,2),
    description TEXT,
    PRIMARY KEY (id)
)';

// $dbc->exec($query);

$nat_parks=[
    ['name' => 'Acadia', 'location' => 'Maine', 'date_est' => '1919-02-26', 'area_in_acres' => 47389.67, 'description' => 'Covering most of Mount Desert Island and other coastal islands, Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes. There are freshwater, estuary, forest, and intertidal habitats.'],
    ['name' => 'American Samoa', 'location' => 'American Samoa', 'date_est' => '1988-10-31', 'area_in_acres' => 9000.00, 'description' => 'The southernmost national park is on three Samoan islands and protects coral reefs, rainforests, volcanic mountains, and white beaches. The area is also home to flying foxes, brown boobies, sea turtles, and 900 species of fish.'],
    ['name' => 'Arches', 'location' => 'Utah', 'date_est' => '1971-11-12', 'area_in_acres' => 1082866, 'description' => 'This site features more than 2,000 natural sandstone arches, including the famous Delicate Arch. In a desert climate, millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, which serve as natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers.'],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_est' => '1978-11-10', 'area_in_acres' => 892372, 'description' => 'The Badlands are a collection of buttes, pinnacles, spires, and grass prairies. It has the world\'s richest fossil beds from the Oligocene epoch, and the wildlife includes bison, bighorn sheep, black-footed ferrets, and swift foxes.'],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_est' => '1944-06-12', 'area_in_acres' => 316953, 'description' => 'Named for the prominent bend in the Rio Grande along the US–Mexico border, this park encompasses a large and remote part of the Chihuahuan Desert. Its main attraction is backcountry recreation in the arid Chisos Mountains and in canyons along the river. A wide variety of Cretaceous and Tertiary fossils as well as cultural artifacts of Native Americans also exist within its borders.'],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_est' => '1988-06-28', 'area_in_acres' => 486848, 'description' => 'Located in Biscayne Bay, this park at the north end of the Florida Keys has four interrelated marine ecosystems: mangrove forest, the Bay, the Keys, and coral reefs. Threatened animals include the West Indian Manatee, American crocodile, various sea turtles, and peregrine falcon.'],
    ['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_est' => '1999-10-21', 'area_in_acres' => 175852, 'description' => 'The park protects a quarter of the Gunnison River, which slices sheer canyon walls from dark Precambrian-era rock. The canyon features incredibly steep descents, and is a popular site for river rafting and rock climbing. The deep, narrow canyon, made of gneiss and schist, is often in shadow and therefore appears black.'],
    ['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_est' => '1928-02-25', 'area_in_acres' => 1311875, 'description' => 'Bryce Canyon is a giant geological amphitheater on the Paunsaugunt Plateau. The unique area has hundreds of tall sandstone hoodoos formed by erosion. The region was originally settled by Native Americans and later by Mormon pioneers.'],
    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_est' => '1964-09-12', 'area_in_acres' => 462242, 'description' => 'This landscape was eroded into a maze of canyons, buttes, and mesas by the combined efforts of the Colorado River, Green River, and their tributaries, which divide the park into three districts. There are rock pinnacles and other naturally sculpted rock formations, as well as artifacts from Ancient Pueblo peoples.'],
    ['name' => 'Capitol Reef', 'location' => 'Utah', 'date_est' => '1971-12-18', 'area_in_acres' => 663670, 'description' => 'The park\'s Waterpocket Fold is a 100-mile (160 km) monocline that exhibits the Earth\'s diverse geologic layers. Other natural features are monoliths, sandstone domes, and cliffs shaped like the United States Capitol.'],
];

$stmt = $dbc->prepare('INSERT INTO nat_parks (name, location, date_est, area_in_acres, description) VALUES (:name, :loc, :est, :area, :descr)');

foreach ($nat_parks as $park) 
{
    $stmt->bindValue(':name',  $park['name'],  PDO::PARAM_STR);
    $stmt->bindValue(':loc',  $park['location'],  PDO::PARAM_STR);
    $stmt->bindValue(':est',  $park['date_est'],  PDO::PARAM_STR);
    $stmt->bindValue(':area',  $park['area_in_acres'],  PDO::PARAM_INT);
    $stmt->bindValue(':descr',  $park['description'],  PDO::PARAM_STR);

    $stmt->execute();

}

?>
