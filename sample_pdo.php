<?php

$pdo = new PDO('mysql:host=localhost;dbname=codeigniter;','root','');

$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$statement = $pdo->prepare('SELECT * FROM users');

// After this you got a object in the $statement that has a execute function this will execute the query
$statement->execute();

// This will fetch all the records from the corresponding database and the corresponding table
// $data = $statement->fetchAll(PDO::FETCH_ASSOC);
$data = $statement->fetchAll();
print_r($data);



?>