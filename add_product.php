<?php
include "db_connection.php";
$title = $_POST ["title"];
$price = $_POST ["price"];

echo"". $title ."". $price ."";

$sql = "INSERT INFO `product` VALUES ($title, $price)";

if($conn->query($sql)===true)
    echo "dostałeś ogłoszenie!";

$conn ->close();
?>