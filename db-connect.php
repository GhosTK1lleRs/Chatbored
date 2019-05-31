<?php 
    $dbhost = "localhost";
    $dbuser = "id9784335_chayangkoon";
    $dbpassword = "1419900652414";
    $dbname = "id9784335_chatbored";

    $con = mysqli_connect($host, $user, $dbpassword, $dbname)or die("Error " . mysqli_error($db));
    mysqli_set_charset($con, "utf8");
    
?>