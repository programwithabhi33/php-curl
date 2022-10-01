<?php
    require_once "./DB.php";

    // if ($_SERVER['request_method'] == "GET"){
        $db = new DB('localhost','codeigniter','root','');
    
    
        // Calling the db object query function 
        $data = $db->query('SELECT * FROM users');
    
        echo $data;
    // }


?>