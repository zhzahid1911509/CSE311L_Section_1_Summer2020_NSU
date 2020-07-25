<?php

$link = mysqli_connect('localhost','root','','VS_CODE_TEST');

if($link==false)
{
    die("Error: Could not connect. " .mysqli_connect_error());
}

$sql = "CREATE TABLE jobs(
    JOB_ID VARCHAR(10) NOT NULL PRIMARY KEY UNIQUE,
    JOB_TITLE VARCHAR(35) NOT NULL,
    MIN_SALARY INT(6),
    MAX_SALARY INT(6))";

if(mysqli_query($link, $sql))
{
    echo "Table Created";
}    

else{
    echo "Error: Could not able to create table." .mysqli_error($link);
}

mysqli_close($link)

?>