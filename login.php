<?php

$con=mysqli_connect('localhost:3306','root','','CRAFTLANE');

$username=$_POST['username'];

$email=$_POST['email'];
$password=$_POST['password'];




$sql="INSERT INTO `login`(`id`,`username`,`email`,`password`) VALUES (0,'$username','$email','$password')";
$result = mysqli_query($con,$sql);

if(isset($_POST['submit'])){
	header('location:signpage.html');
}


?>