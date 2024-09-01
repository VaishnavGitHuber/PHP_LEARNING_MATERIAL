<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>LABSHEET2</h2>
    
    <form action="Labsheet2.php" method='GET'>
        Name: <input type="text" name="name" id=""> <br>
        Age: <input type="number" name="age" id=""> <br>
        <button type="submit">Click me</button>
    </form>


<?php
/*  1. GET AND POST Concepts in PHP
    2. Array Concepts 
        2.1 Index Array 
        2.2 Asosiate Array
    3. Foreach loop for array 
    4. Include and Require Concepts in PHP 
    5. Object Oriented Programming Concepts(OOPS)
        5.1 Class and Objects
        5.2 Acess Modifiers: Public,Private
        5.3 Constructors 
    6. MySQL
        6.1 Connecting MySQL to PHP
        6.2 functions 
            6.2.1 mysqli_connect(host,user,password,database)
            6.2.2 mysqli_query($conn,$sql)
            6.2.3 mysqli_close($conn)


*/
// GET AND POST
    // $name = $_GET['name'];
    // $age = $_GET['age'];
    // echo $name;
    // echo '<br>';
    // echo $age;

// Array - Index Array
$colors = array('Orange','Apple','Grapes');

// for($index=0;$index < count($colors);$index++){
//     echo $colors[$index].'<br>';
// }
// Asosiate Array 
$countrys = ['IN'=>"India",'BN'=> "Banglore"];

// foreach($countrys as $c => $country){
//     echo $c.'=>'.$country.'<br>';
// }

//include or require 
// include : in case of error excute remining 
// <?php include 'Labsheet1.php' 

// class - objects

// class Biography {
//     public $name;
//     public $age;
//     public function __construct($name,$age){
//         $this->name = $name;
//         $this->age = $age;
//     }

//     // get name function
//     function get_name(){
//         echo $this->name;
//     }
// }
// $vai_bio = new Biography('Vaishnav',18);

// $vai_bio->get_name();

// Connecting Mysql with PHP
// 1. mysql_connect()
// 2. mysql_
error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = '127.0.0.1';
$user = 'root';
$pass = '20221COM0040@vaishnav';
$database = "BioGraphy";

// echo "Trying to connect...<br>";

$conn = mysqli_connect($host, $user, $pass, $database);

// Check connection
// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// echo "Connected successfully";

// 1. Inserting values using query
// $sql = "INSERT INTO DETAILS(SINO,NAME,AGE) VALUES (5,'Kiran','56')";
//mysqli_query($conn,$sql)

// 2. Inserting int0 mysql using a form
// $name = $_GET['name'];
// $age = $_GET['age'];
// $sql = "INSERT INTO DETAILS(SINO,NAME,AGE) VALUES (5,'$name','$age')";

// mysqli_query($conn,$sql);
// mysqli_close($conn);
?>

</body>
</html>