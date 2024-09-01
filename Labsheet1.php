<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phptutorials</title>
</head>
<body>
    <!-- PHP TUTORIALS -->
     <?php
     /* CONTENTS 
     1. Comments
        1.1 Single line comment(//)
        1.2 Multiple line comment

     2. Varible declaration($var_name)

     3. Datatypes 
        3.1 Int type 
        3.2 Float type / Doubl
        3.3 String type 
        3.4 Boolean type 
        3.5 Array type 

     4. String Functons
        4.1 strlen(string)
        4.2 str_word_count(string)
        4.3 strtolower(string)
        4.4 strtoupper(string)
        4.5 strpos(string,substing)
        4.6 strrev(string)
        4.7 str_replace(string to be replaced, new string, string)

     5. Math Functions 
        5.1 pi()
        5.2 min(num1,num2)
        5.3 max(num1,num2)
        5.4 sqrt(num)
        5.5 round(num)
        5.6 rand(low-limit, upper-limit)

     6. Operators 
        6.1 Arthematic Operators (+,-,/,*)
        6.2 Comparison Operators (==,===(check datatype also),<,<=,>,>=)
        6.3 Increment and decrement Operator (++, --)

    7. Condition Statements and Control statements
        7.1 if statement 
            7.1.1 Simple if 
            7.1.2 else-if condition
            7.1.3 if-else condition
        7.2 Switch 
        7.3 While loop 
        7.4 for loop
        7.5 for each loop
        7.6 do-while loop

    8. Functions 
        8.1 Function without parameters without retrun value
        8.2 Function without parameter with return value
        8.3 Function with parameter without return value 
        8.4 Function without parameter with return value 
     */
     $num1 = 10 ;// var declarations 

     // datatypes 
     $num1 = 23;
     $num2 = 34.5;
     $is_valid = true ;
     $name = "Vaishnav Krishna P";
     $colors = ['Apple',"Banana",'Orange'];

    //  echo gettype($num1);
    //  echo '<br>';
    //  echo gettype($num2);
    //  echo '<br>';
    //  echo gettype($is_valid);
    //  echo '<br>';
    //  echo gettype($name);
    //  echo '<br>';
    //  echo gettype($colors);

    $text = "This is a good day and I am very happy";
    // echo $text ;
    // String functions 
    // echo '<br>Length of string ' .strlen($text);
    // echo '<br>No of words in string ' .str_word_count($text);
    // echo '<br>Lowercase of string ' .strtolower($text);
    // echo '<br>UpperCase of string ' .strtoupper($text);
    // echo '<br>String Position of happy ' . strpos($text,'happy');
    // echo '<br>Reverse of string ' . strrev($text);
    // echo '<br>Replacing string happy->bad ' . str_replace('happy','bad',$text);

    // MathFunctions 
    // echo "Value of PI: ".pi();
    // echo "<br>Max of Numbers: ".max(1,2,3,4);
    // echo "<br>Min of Numbers: ".min(0,4,5,6,8);
    // echo "<br>SQRT of numbers: ".sqrt(64);
    // echo "<br>Round of number: ".round(64.6);
    // echo "<br>Random number: ".rand();

    //$x = 1;
    # if condition
    // if($x == 2){
    //     echo "Number is 2";
    // }else if($x == 1) {
    //     echo "Number is 1";
    // }else {
    //     echo "number is not 1 or 2";
    // }

    // Switch 
    $choice = 3 ;

    // switch($choice){
    //     case 1:
    //         echo "BIRIYANI";
    //         break;
    //     case 2:
    //         echo "RICE";
    //         break;
    //     case 3:
    //         echo "CHICKEN";
    //         break;
    //     default:
    //         echo 'Enter valid choice';
    //         break;
    // }

    // While loop
    // $x = 1;
    // while($x <= 10){
    //     echo "Hello<br>";
    //     $x ++;
    // }
     
    // do-while loop 
    // $x = 1;
    // do {
    //     echo "Hello <br>";
    //     $x ++;
    // }while($x <= 10);

    // for loop 
    // for($x = 0;$x < 10;$x++){
    //     echo "HEY COUNT <br>";
    // }

    // function 
    // function addTwoNumbers($num1, $num2){
    //     return $num1 + $num2;
    // }
    // function callName(){
    //     return "<br>Vaishnav Krishna P";
    // }
    // echo addTwoNumbers(3,4);
    // echo callName();
?>
</body>
</html>