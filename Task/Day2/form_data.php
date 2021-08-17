<?php
include ("formdb.php");
if (isset($_POST['submit'])){
			$email=$_POST["email"];
			 $name=$_POST["name"];
			$clgname=$_POST["clgname"];
			$mob=$_POST["mob"];
			$age=$_POST["age"];
			 $dob=$_POST["dob"];
			$address=$_POST["address"];
			$year=$_POST["year"];
			 $hobbies=$_POST["hobbies"];
			 $field=$_POST["field"];
			 $photo=$_POST["photo"];
	}
$Insert= "INSERT INTO registration(email,name,clgname,mob,age,dob,address,year,hobbies,photo)VALUES($email,'$name','$clgname','$mob','$age','$dob','$address','$year''$hobbies','$field','$photo')";

$result=mysqli_query($conn,$Insert) or die(mysqli_error());
if ($result)
{
	echo "records are inserted succefully";

	exit;
	
}
else{
	echo "error";
}
?>