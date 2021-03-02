<?php

$na =$_POST['n'];
$em =$_POST['e'];
$co =$_POST['c'];
$pa =$_POST['p'];

$conn= mysqli_connect("localhost","root","","fyp");

if(!$conn){
	die("Connection Failed: ".mysqli_connect_error());
	echo "fail";
}

$s = "SELECT * FROM  userss WHERE email = '$em'";
$r= mysqli_query($conn,$s);
$count= mysqli_num_rows($r);

if($count ==1)
{

	echo "Email Already in Use";
	
}
else
{
   $sql= "INSERT INTO userss VALUES('','$na','$em','$co','$pa') ";
   mysqli_query($conn,$sql);

   echo "Account Created";
   
}

?>
             