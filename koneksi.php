<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "konsul";

    $connect = mysqli_connect($host,$user,$password,$database)
    or die("Gagal Menghubungkan")   
?>