<?php
    require_once "./DB.php";

    $db = new DB('localhost','codeigniter','root','');


    // Calling the db object query function 
    $data = $db->query('SELECT * FROM users');

    echo $data;


?>