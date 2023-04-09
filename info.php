<?php
$fName=$_POST['fName'];
$lName=$_POST['lName'];
$email=$_POST['email'];
$message=$_POST['message'];

$link = mysqli_connect("localhost", "root", "", "assignment2");

if($link === false){
    die("Error " .mysqli_connect_error());
}

$sql = "INSERT INTO  `userInfo`(`firstName`, `lastName`, `email`, `message`) VALUES ('$fName', '$lName', '$email', '$message')";
if(mysqli_query($link, $sql)){
    echo "Data recorded successfully.";
}
else{
    echo "Could be able to execute $sql." .mysqli_error($link);
}

mysqli_close($link);

?>