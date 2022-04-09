<?php

$conn = mysqli_connect("localhost", "root", "", "signup");
  
if($conn === false){
	die("ERROR: Could not connect. " 
		. mysqli_connect_error());
}
  
    $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$adult = $_POST['adult'];
    $child = $_POST['child'];
	$date = $_POST['date'];
    $fromplace = $_POST['fromplace'];
    $toplace = $_POST['toplace'];
    $preference = $_POST['buspreference'];
    $other = $_POST['other'];
$sql = "INSERT INTO book  VALUES ('$name', '$email','$phone','$adult','$child','$date','$fromplace','$toplace','$preference','$other')";
  
if(mysqli_query($conn, $sql)){
	header("Location: book.html",true,301);

} else{
	header("Location: home.html",true,301);
}
mysqli_close($conn);
?>