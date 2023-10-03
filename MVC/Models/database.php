<?php
    $hostName ="localhost:3307";
    $userName="root";
    $password="12345678";
    $databaseName="Nail_dtbase";

    $conn = new mysqli($hostName,$userName,$password,$databaseName);

    if($conn -> connect_error){
        die("Connection failed: ".$conn->connect_error);
    }
?>


