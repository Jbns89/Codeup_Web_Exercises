<?php

$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'Jill', 'Jeremiah20:9');

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = 'CREATE TABLE nat_parks (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(50) NOT NULL,
    location VARCHAR(50) NOT NULL,
    date_est DATE,
    area_in_acres FLOAT(10,2),
    PRIMARY KEY (id)
)';

//$dbc->exec($query);

$nat_parks=[
    ['name' => 'Acadia', 'location' => 'Maine', 'date_est' => '1919-02-26', 'area_in_acres' => 47389.67],
    ['name' => 'American Samoa', 'location' => 'American Samoa', 'date_est' => '1988-10-31', 'area_in_acres' => 9000.00],
    ['name' => 'Arches', 'location' => 'Utah', 'date_est' => '1971-11-12', 'area_in_acres' => 1082866],
    ['name' => 'Badlands', 'location' => 'South Dakota', 'date_est' => '1978-11-10', 'area_in_acres' => 892372],
    ['name' => 'Big Bend', 'location' => 'Texas', 'date_est' => '1944-06-12', 'area_in_acres' => 316953],
    ['name' => 'Biscayne', 'location' => 'Florida', 'date_est' => '1988-06-28', 'area_in_acres' => 486848],
    ['name' => 'Black Canyon of the Gunnison', 'location' => 'Colorado', 'date_est' => '1999-10-21', 'area_in_acres' => 175852],
    ['name' => 'Bryce Canyon', 'location' => 'Utah', 'date_est' => '1928-02-25', 'area_in_acres' => 1311875],
    ['name' => 'Canyonlands', 'location' => 'Utah', 'date_est' => '1964-09-12', 'area_in_acres' => 462242],
    ['name' => 'Capitol Reef', 'location' => 'Utah', 'date_est' => '1971-12-18', 'area_in_acres' => 663670],
];

foreach ($nat_parks as $park) 
{
    $query = "INSERT INTO nat_parks (name, location, date_est, area_in_acres) VALUES ('{$park['name']}', '{$park['location']}', '{$park['date_est']}', '{$park['area_in_acres']}')";

    $dbc->exec($query);
}

?>
