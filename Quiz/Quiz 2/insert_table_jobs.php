<?php

$link = mysqli_connect('localhost','root','','VS_CODE_TEST');

if($link == false)
{
    die("Error: Could not Connect." .mysqli_connect_error());
}

$sql = "INSERT INTO jobs VALUES
('AD_PRES','President',20000,40000),
('AD_VP','Administration Vice President',15000,30000),
('AD_ASST','Administration Assistant',3000,6000),
('AC_MGR','Accounting Manager',8200,16000),
('AC_ACCOUNT','Public Accountant',4200,9000),
('SA_MAN','Stock Manager',5500,8500),
('ST_CLERK','Stock Clerk',5500,8500),
('IT_PROG','Programmer',4000,10000),
('MK_MAN','Marketing Manager',9000,15000),
('MK_REP','Marketing Representative',4000,9000)";
    
if (mysqli_query($link,$sql))
{
 echo "VALUES INSERTED";
}
 else
 {
   echo "Error : Could not able to create Table." .mysqli_error($link);
 }
 mysqli_close($link)

?>