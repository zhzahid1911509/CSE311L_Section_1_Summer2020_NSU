<?php

$link = mysqli_connect('localhost','root','','homework 2');

if($link==false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE Locations
(
Location_id int(4) PRIMARY KEY,
Street_Address VARCHAR(40) DEFAULT NULL,
Postal_Code VARCHAR(12) DEFAULT NULL,
City VARCHAR(30) NOT NULL,
State_Province VARCHAR(25) DEFAULT NULL,
Country_ID VARCHAR(20) DEFAULT NULL
)";

if(mysqli_query($link, $sql))
{
    echo "Table Created";
}    

else{
    echo "Error: Could not able to create table." .mysqli_error($link);
}

mysqli_close($link)

?>