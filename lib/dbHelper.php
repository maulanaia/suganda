<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "sugandaDb";

    $sql = new mysqli($host, $user, $pass, $name);

    if($sql -> connect_error){
        die("Connection error : ". $sql -> connect_error);
    }
?>