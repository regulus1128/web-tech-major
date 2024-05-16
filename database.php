<?php
    $db_server = "localhost";
    $username = "root";
    $password = "";
    $db_name = "company";
    $conn = "";
    
    try{
        $conn = mysqli_connect($db_server, $username, $password, $db_name);
    }
    catch(mysqli_sql_exception){
        echo 'Database is not connected';

    }
    
    //$conn is an object
    if($conn){
        // echo 'Database is connected';
    }
    
?>