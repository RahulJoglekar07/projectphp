<?php
$insert = false;
if(isset($_POST['name'])){
    // set connection variable
    $server='localhost';
    $username='root';
    $password='';

    // create a connection
    $con=mysqli_connect($server,$username,$password);
    // check for connection success
    if(!$con){
        die('connection to this database failed due to' .mysqli_connect_error());
    }
    // echo 'success connecting to the db';
    
    // collect post variables
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];
    $sql="INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `DT`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // exicute the query
if($con->query($sql)==true){
    // echo 'success fully inserted';

    // flag for successful insertion
    $insert = true;
}
else{
    echo "ERROR :$sql <br> $con->error";
}
// close conection
    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to trevel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="https://www.rd.com/wp-content/uploads/2023/03/GettyImages-1160947136.jpg" alt="image error" srcset="">
    <div class="container">
        <h1>Welcome to VTU Trevel form</h1>
        <p>Enter your details and submit this form to conform your participation in the trip</p>

        <form action="index.php" method="post">
<input type="text" name="name" id="name" placeholder="Enter Your Name">
<input type="text"name='age' id="age" placeholder="Enter your Age">
<input type="text" name="gender" id="gender" placeholder="Enetr your Gender">
<input type="email" name="email" id="email" placeholder="Enter your Email">
<input type="phone" name="phone" id="phone" placeholder="Enter your phone No">
<textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Address"></textarea>

<?php
    if($insert==true){
    echo '<p class="submitMsg">Thanks for submiting your form. We are happy to see you joinong for the us trip</p>';
    }

?>
<button class="btn">Submit</button>

        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>