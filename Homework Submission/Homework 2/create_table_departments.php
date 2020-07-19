<?php

$link = mysqli_connect('localhost','root','','homework 2');

if($link==false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE Departments
(
Department_id int(5) PRIMARY KEY,
Department_Name VARCHAR(20) DEFAULT NULL,
Manager_id int(10) DEFAULT NULL,
Location_id int(10) DEFAULT NULL
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