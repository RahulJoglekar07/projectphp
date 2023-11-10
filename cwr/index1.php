<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class='container'>
        <?php
        echo 'Hello World<br>';
        $var=12;
        $var1=34;
        echo var_dump($var<$var1);
        echo'<br>';
        echo var_dump($var==$var1);
        echo'<br>';
        
        $va='This is a string';
        echo  ($va);
        define('d','<br>Hello Rahul. You Are The One Who Can Do Evrything for Enything. Till You Alive<br>');
        echo d;
        echo d;
        echo d;
        echo d;
        $age=8;
        if($age>18){
            echo 'you can go to party';
        }
        elseif($age==18){
            echo 'you are 18 years old';
        }
        else{
            echo 'you canot go to party<br>';
        }
        $languages=array('java','css','c++','python');
        echo $languages[0];
        echo '<br>';
        echo count($languages);
        echo '<br>';
        $a=0;
        while($a<11){
            echo $a;
            $a++;
        }
        echo '<br>';
        $a=0;
        while($a<count($languages)){
            echo($languages[$a]);
            $a++;
        }
        echo '<br>';
        $a=0;
        do{
            echo $a;
            $a++;
        }
        while($a<11);
        echo '<br>';
        for($i=0;$i<10;$i++){
            echo 'this is forloop :',$i;
        }
        echo '<br>';
        $languages=array('java','php','c++');
        foreach ($languages as $value){
            echo $value;
        }
        echo '<br>';
        $str='this is a string';
        echo $str;
        echo '<br>';
        echo strlen($str);
        echo '<br>';
        echo strrev($str);
        echo '<br>';
        echo str_word_count($str);
        echo '<br>';
        echo strpos($str,'a');
        echo str_replace('this','that')

        ?>

    </div>
</body>
</html>