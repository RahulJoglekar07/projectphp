<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        .container{
            max-width: 80%;
            background-color: grey;
            margin:auto;
            padding:50px
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lets Learn about Php</h1>
         <p>Your Party Status Is Here</p>
        <?php
        $age=18;
        if($age>18){
            echo 'You Can Go To The Party';
        }
        else if($age==18){
            echo 'You are 18 years old';
        }
        else if($age==1){
            echo 'You are 1 years old';
        }
        else{
            echo 'You Canot Go To The Party';
        }
        #Arrays
        echo'<br>';
        $language = array('java ','python ','C++ ','HTML ','CSS ');
        echo $language[0];
        echo count ($language);
         
        # While Loops in php
        echo'<br>';
        $a=0;
        while($a<=10){
            echo '<br>The value is:',$a;
            $a++;   
        }

        #Interating array While Loops in php
        // $language = array('java ','python ','C++ ','HTML ','CSS '); 
        echo'<br>';
        $a=0;
        while($a<count($language)){
        echo '<br>The language are:',$language[$a];
        $a++;
       }      
        
        #Do While Loops in php
        echo'<br>'; 
        $a=20;                  # if condition is false still it runs for ones
        // $a=0                    # if condition true run full
        do{
            echo '<br>values cond false ',$a;
            $a++;
        }while($a<=5);

        #For Loops in php
        echo'<br>';
        for ($i=0; $i < 10; $i++){
            echo '<br>the value forloop is :',$i;
        }
         
        #for each loop
        echo'<br>';
        // $language = array('java ','python ','C++ ','HTML ','CSS '); 
        foreach ($language as  $value){
            echo '<br>the vlue foreach loop is ',$value;
        }

        #Print ----function------
        echo'<br>';
        function print5(){
            echo '<br>FIVE';
        }
        print5();
        print5();
        print5();

        echo '<br>';
        function prnt_num($num){
            echo '<br>Your number is : ',$num;
        }
        prnt_num(45);
        prnt_num(46);
        

        ?>
    </div>
</body>
</html>