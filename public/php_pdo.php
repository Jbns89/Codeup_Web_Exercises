<?php

//YOU NEED TO REFRESH THIS IN THE BROWSER FOR THE CODE TO ACTUALLY RUN
//IT WIL NOT AUTOMATICALLY CHANGE

// Get new instance of PDO object
$dbc = new PDO('mysql:host=127.0.0.1;dbname=codeup_pdo_test_db', 'Jill', 'Jeremiah20:9');

// Tell PDO to throw exceptions on error
$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $dbc->query('SELECT * FROM users');

// // Bring the $dbc variable into scope somehow
// function getUsers($dbc) {
    
//     // //This is creating a blank array called $rows and putting the 
//     // //users array inside of it 
//     // $stmt = $dbc->query('SELECT * FROM users');
//     // $rows = array();
//     // while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     //     $rows[] = $row;
//     // }
//     //return $rows;
    
    
//     //This does the exact same thing
//     return $dbc->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
// }
// var_dump(getUsers($dbc))
// //This is creating 
// $stmt = $dbc->query('SELECT count(*) FROM users');

// echo 'There are ' . $stmt->fetchColumn() . ' users in our database' . PHP_EOL;


//Showing the difference between the fetch functions
print_r($stmt->fetch());
print_r($stmt->fetch(PDO::FETCH_ASSOC));
print_r($stmt->fetch(PDO::FETCH_NUM));
print_r($stmt->fetch(PDO::FETCH_BOTH));

// //This is returning an array
// echo "Columns: " . $stmt->columnCount() . PHP_EOL;
// while ($row = $stmt->fetch()) {
//     print_r($row);
// }

// //This is just giving the number of rows and columns
// echo "Columns: " . $stmt->columnCount() . PHP_EOL;
// echo "Rows: " . $stmt->rowCount() . PHP_EOL;


// // Create the query and assign to var
// $query = 'CREATE TABLE users (
//     id INT UNSIGNED NOT NULL AUTO_INCREMENT,
//     email VARCHAR(240) NOT NULL,
//     name VARCHAR(50) NOT NULL,
//     PRIMARY KEY (id)
// )';

// // Run query, if there are errors they will be thrown as PDOExceptions
//$dbc->exec($query);

// // Create INSERT query
// $query = "INSERT INTO users (email, name) VALUES ('ben@codeup.com', 'Ben Batschelet')";

// // Execute Query
// $numRows = $dbc->exec($query);
// echo "Inserted $numRows row." . PHP_EOL;

// // 
// $users = [
//     ['email' => 'jason@codeup.com',   'name' => 'Jason Straughan'],
//     ['email' => 'chris@codeup.com',   'name' => 'Chris Turner'],
//     ['email' => 'michael@codeup.com', 'name' => 'Michael Girdley']
// ];

// foreach ($users as $user) {
//     //loops thorugh the users and inserts them into our users table we already created
//     $query = "INSERT INTO users (email, name) VALUES ('{$user['email']}', '{$user['name']}')";

//     $dbc->exec($query);

//     echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
// }

?>
