<?php

// $link = mysqli_connect("localhost", "root", "mysql", "portfolio");
$link = mysqli_connect("localhost", "root", "mysql", "portfolio");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$type = mysqli_real_escape_string($link, $_REQUEST['type']);
$about = mysqli_real_escape_string($link, $_REQUEST['about']);
$special = mysqli_real_escape_string($link, $_REQUEST['special']);
$rate = mysqli_real_escape_string($link, $_REQUEST['rate']);


$sql = "INSERT INTO company (Business, Type, About, Speciality, Rating) VALUES ('$name','$type','$about','$special','$rate')";




if(mysqli_query($link, $sql)){
	$last_id = mysqli_insert_id($link);

    header('Location: browse.php');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}


mysqli_close($link);
?>
