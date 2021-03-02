<?php

$em =$_POST['a'];
$pa =$_POST['b'];


$conn= mysqli_connect("localhost","root","","fyp");


$sa = "SELECT * FROM  userss WHERE email = '$em' AND password ='$pa'";
$ra = mysqli_query($conn,$sa);
$count= mysqli_num_rows($ra);

if($count ==1)
{
	echo "Successfully Login";
	 
}
else
{
   echo "Username and Password is incorrect";
   
}
?>