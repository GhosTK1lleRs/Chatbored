<?php 
    include("./db-connect.php");
    session_start();

    $randomnumber = rand(1,99);

    
    mysqli_query($con, $query);

    $type = $_GET['type'];
    $stmt = "SELECT * FROM Items WHERE ItemID = $randomnumber";
    $query  = mysqli_query($con,$stmt);
    while($data= mysqli_fetch_array($query)){
        $myarr[]=$data;
    }
    echo json_encode($myarr);
    $file = fopen('data.json' ,'w');
    fwrite($file, json_encode($myarr, JSON_FORCE_OBJECT));
    
    $url = 'data.json'; // path to your JSON file
    $data = file_get_contents($url); // put the contents of the file into a variable
    $characters = json_decode($data); // decode the JSON feed

?>
