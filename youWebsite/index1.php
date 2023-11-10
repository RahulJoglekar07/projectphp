<?php
$server='localhost';
$username='root';
$passwerd='';

$con=mysqli_connect($server,$username,$password);

$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$phone=$_POST["phone"];
$desc=$_POST["desc"];

$sql="INSERT INTO `t`.`t` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `comment`,) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());"; 

if($con->querry($sql)==true){
}
else {
    "ERROR:$sql<br>$con->error";
}
$con->close();
?>
