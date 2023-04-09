<?php
$userName=$_POST['userName'];
$password=$_POST['password'];

// $link = mysqli_connect("localhost", "root", "", "assignment2");

// if($link === false){
//     die("Error " .mysqli_connect_error());
// }

if (empty($userName) || empty($password)) {
    echo "Login Failed";
}
else{
    // connect database
    $connect = mysqli_connect('localhost', 'root', '', 'assignment2') or die("Error: Could not connect" . mysqli_error());

    // check data with table
    $sql = "SELECT * FROM `admin` as a WHERE a.userName='$userName' and a.password='$password'";

    // execute query
    $result = mysqli_query($connect, $sql) or die(mysqli_error());
    if (mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        header("Location:userinfo.php");
    }
    else{
        header("Location:login.php");
        echo "Failed to login";
    }
}
?>