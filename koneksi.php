<?php
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "toko";

    $connect = mysqli_connect($server, $user, $pass, $dbname);
    if ($connect) {
    
    } else {
    die("Connection Failed: " .mysqli_connect_error());
    }
?>