<?php
$insert=false;
if(isset($_POST['name'])){
$server='localhost';
$username='root';
$password='';

$con=mysqli_connect($server,$username,$password);

// if(!$con){
//      die("connection to database failed due to".mysqli_connect_error());
// }
// echo "sucess connecting to db";

$name=$_POST['name']; 
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];

$sql="INSERT INTO `t`.`t` (`name`, `age`, `gender`, `email`, `phone`, `comment`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
// echo $sql;

if($con->query($sql)==true){
     // echo "sucessfully inserted";
     $insert=true;
}
else{
     echo "ERROR:$sql<br>$con->error";
}
$con->close();
}
     
?>
     
     <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to trevel form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Welcome To KIT Trevel Form</h1>
    <p>Enter your details and submit your form thank You</p>
    <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter the comment"></textarea>
        <button class="btn">Submit</button>
        <?php
        
        if($insert==true){
        echo "<p class='submitmsg'>thank you</p>";
        }
        ?>
    </form>
    <!-- INSERT INTO `t` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `comment`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());" -->
</div>
</body>
</html>

