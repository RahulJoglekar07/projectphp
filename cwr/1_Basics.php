<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
             echo 'Hello world and this is printed using php';
             echo '<br>';

             // secret algorithm

    $variable1 = 4;
    $variable2 = 5;
    echo $variable1;
    echo $variable2;

    echo $variable1 + $variable2;
    define('pi',3.1);   # this is to create content

    // Opperators in php
    // Arithmetic OP
    echo '<br>';
    echo 'the value of Var1 + Var2 is ';
    echo $variable1 + $variable2;
    echo '<br>';
    echo 'the value of Var1 - Var2 is ';
    echo $variable1 - $variable2;
    echo '<br>';
    echo 'the value of Var1 * Var2 is ';
    echo $variable1 * $variable2;
    echo '<br>';
    echo 'the value of Var1 / Var2 is ';
    echo $variable1 / $variable2;

    // Assignment OP
    echo '<br>';
    $newvar = $variable1;
    $newvar += 1;
    // $newvar -= 1;
    // $newvar *= 1;
    // $newvar /= 1;
    echo 'the value of new variable is ';
    echo $newvar;

    // Comparitor OP
    echo '<br>';
    echo 'the value of 1==4 is ';
    echo var_dump(1==4);
     
    echo '<br>';
    echo 'the value of 1!=4 is ';
    echo var_dump(1!=4);

    echo '<br>';
    echo 'the value of 1>=4 is ';
    echo var_dump(1>=4);

    echo '<br>';
    echo 'the value of 1<=4 is ';
    echo var_dump(1<=4);

    // Increment Decrement OP
    echo '<br>';
    echo $variable1++;
    // echo $variable1--;
    // echo ++$variable1;
    // echo --$variable1;
    echo '<br>';
    echo $variable1;
    
    // Logical OP
    // and (&&)
    // or (||)
    // xor
    // ! 
    echo '<br>' ; 
    // $var =(true and true);
    // $var =(true and false);
    // $var =(false or true);
    // $var =(false or false);
    // $var =(true xor true);
    $var =(false xor false);
    echo var_dump($var);
        ?>
        <?php
        echo '<br>';
            // Data type in php
            // 1. String 
            $va='This is a string';
            echo var_dump ($va);
            // 2. Integer
        echo '<br>';
            $va=45;
            echo var_dump ($va);
            // 3. Float
        echo '<br>';
            $va=4.1;
            echo var_dump($va);
            // 4. Boolean
        echo '<br>';
            $va= true;
            echo var_dump($va); echo '<br>';
            
            echo pi;      # to call pi define in line 23
            
            // 5. Array
            // 6. Object

        ?>
    </div>
</body>
</html>