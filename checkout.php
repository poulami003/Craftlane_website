<?php

$con=mysqli_connect('localhost:3306','root','','CRAFTLANE');

$firstname=$_POST['ffirst'];
$firstname=$_POST['flast'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$phone=$_POST['zip'];



$sql="INSERT INTO `checkout`(`id`,`ffirst`,`flast`,`email`,`phone`,`address`,`zip`) VALUES (0,'$firstname','$lastname','$email','$phone','$address','$zip')";
$result = mysqli_query($con,$sql);

if(isset($_POST['submit'])){
	header('location:order.html');
}


?>