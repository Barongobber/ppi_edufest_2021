<?php 
    //$host = 'localhost';
    //$user = 'root';
    //$pass = '';
    //$db = 'ppi';

    $host = 'localhost:3306'; 
    $user = 'ppi_edufest'; 
    $pass = 'werty@1234'; 
    $db = 'ppi_edufest'; 


    $conn = mysqli_connect($host, $user, $pass , $db);

    if (mysqli_connect_errno()){
        echo "failed";
        exit();
    }
    date_default_timezone_set("Asia/Jakarta");
?>