<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
    This is my first php website.
    <?php
    // case insensitive
        echo "hello word and this is printed using php";
        // single line comment
        /*
        this is multiline 
        comment
        */
        echo "<br>";

        $var1=5;
        $var2=2;
        Echo $var1+$var2; // works 
        echo "<br>";
        
        // operators
        // arithmetic
        echo "value of addition  ";
        echo $var1+$var2;
        echo "<br>";
        echo "value of sub ";
        echo $var1-$var2;
        echo "<br>";
        echo "value of mul ";
        echo $var1*$var2;
        echo "<br>";
        echo "value of div  ";
        echo $var1/$var2;
        echo "<br>";
        // assignment
        $new =$var1;
        $var1-=2;
        $var1+=2;
        $var1*=2;
        $var1/=2;
        echo "$new <br> $var1";
        echo "<br>";
        // comparison
        // boolean
        echo "the value of 1==4 ";
        echo var_dump(1==4);
        echo "<br>";
        echo "the value of 1<=4 ";
        echo var_dump(1<=4);
        echo "<br>";
        echo "the value of 1>=4 ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "the value of 1!=4 ";
        echo var_dump(1!=4);
        echo "<br>";
        // increment/decrement operator
        echo $var1++;
        echo "<br>";
        echo $var1--;
        echo "<br>";
        echo ++$var1;
        echo "<br>";
        echo --$var1;
        echo "<br>";
        // logical operator
        // and(&&)
        // or(||)
        // !
        // xor
        // $myvar=(true and true);
        // $myvar=(true && false);
        // $myvar=(true || false);
        // $myvar=(true or false);
        // $myvar=(true xor false);
        $myvar=(true xor true);
        echo var_dump($myvar);




    ?>
    <?php
        // echo "hello word again";
        // data type
        // 1.String
        // 2.Integer
        // 3.Float
        // 4.Boolean
        // 5.Array 
        // 6.Object
        $var ="this is a string";
        // echo $var;
        echo var_dump($var);


    ?>
    </div>
</body>
</html>