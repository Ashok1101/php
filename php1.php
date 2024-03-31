<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL</title>
</head>
<body>
    <?php //php -> Hypertext Preprocessor //Personal Home Page
    echo "PHP COURSE"; //';' is must in php for terminate
    ECHO "keywords are case insensitive"; //keyword are case insensitive 
    /*variables are containers for storing information and
    starts with '$'*/
    $name = 'Arvind'; # also used for single line comment
    $surname = "patel";
    echo "\nmy name is $name $surname<br>";
    ?>
    <?php
    $name = "Arvind";
    $income = 200000;

    /* php data types
    1. String
    2. Integer
    3. Float
    4. Boolean
    5. Object
    6. Array
    7. NULL
    */

    // String - sequence of characters
    $friend = 'Rohan';
    echo "$name ka friend is $friend";


    // Integer - Non decimal number
    $income = 455;
    $debts = -655;
    echo "<br>";
    echo $income;
    echo "<br>";
    echo $debts;
    echo "<br>";

    // Float - Decimal point number
    $income = 344.5;
    $debts = -45.5;
    echo $income;
    echo "<br>";
    echo $debts;
    echo "<br>";

    // Boolean - Can be either true or false
    $x = true;
    $is_friend = false;
    echo var_dump($x); // without var_dump it gives blank
    echo "<br>";
    echo var_dump($is_friend);
    echo "<br>";

    // Object - Instances of classes
    // Employee is a class ---> harry can be one object

    // Array - Used to store multiple values in a single variable
    $friends = array("rohan", "shubham", "skillf", "Larry");
    echo var_dump($friends);
    echo "<br>";
    echo $friends[0];
    echo "<br>";
    echo $friends[1];
    echo "<br>";
    echo $friends[2];
    echo "<br>";
    echo $friends[3];
    echo "<br>";
    //echo $friends[4]; // will throw an error as the size of array is 4

    // NULL
    $name = NULL;
    echo var_dump($name);
    ?>
    <!-- string functions -->
    <?php 
    $name = "rohan is a good boy";
    echo $name;
    echo "<br>";
    echo "The length of " . "my string is " . strlen($name);//'.' for concat
    echo "<br>";
    echo str_word_count($name);
    echo "<br>";
    echo strrev($name);
    echo "<br>";
    echo strpos($name, "Harry");
    echo "<br>";
    echo str_replace("Harry", "Rohan", $name);
    echo "<br>";
    echo str_repeat($name, 4);
    echo "<br>";
    echo "<pre>";
    echo rtrim("    this is a good boy     ");// to remove spaces
    echo "<br>";
    echo ltrim("    this is a good boy     ");
    echo "</pre>";
    ?>
    <?php
    /* Operators in PHP */
    $a = 45;
    $b = 8;

    // 1. Arithmetic Operators
    echo "For a + b, the result is ". ($a + $b) . "<br>";
    echo "For a - b, the result is ". ($a - $b) . "<br>";
    echo "For a * b, the result is ". ($a * $b) . "<br>";
    echo "For a / b, the result is ". ($a / $b) . "<br>";
    echo "For a % b, the result is ". ($a % $b) . "<br>";
    echo "For a ** b, the result is ". ($a ** $b) . "<br>";
    
    // 2. Assignment Operators
    // $x = $a;
    // echo "For x, the value is ". $x . "<br>";

    $a += 6;
    echo "For a, the value is ". $a . "<br>";

    $a -= 6;
    echo "For a, the value is ". $a . "<br>";

    $a *= 6;
    echo "For a, the value is ". $a . "<br>";

    $a /= 5;
    echo "For a, the value is ". $a . "<br>";

    $a %= 5; // $a = $a % 5
    echo "For a, the value is ". $a . "<br>";

    // 3. Comparison Operators 
    $x = 78;
    $y = 78;

    echo "For x == y, the result is ";
    echo var_dump($x == $y);

    echo "For x === y, the result is ";
    echo var_dump($x === $y);

    echo "For x > y, the result is ";
    echo var_dump($x > $y);

    echo "For x >= y, the result is ";
    echo var_dump($x >= $y);

    echo "For x < y, the result is ";
    echo var_dump($x < $y);

    echo "For x <= y, the result is ";
    echo var_dump($x <= $y);

    echo "For x <> y, the result is "; 
    echo var_dump($x <> $y);
    echo "<br>";

    // 4. Logical Operators

    $m = true;
    $n = true;

    echo "For m and n, the result is "; 
    echo var_dump($m and $n);
    echo "<br>";

    echo "For m && n, the result is "; 
    echo var_dump($m && $n);
    echo "<br>";

    echo "For m or n, the result is "; 
    echo var_dump($m or $n);
    echo "<br>";

    echo "For m || n, the result is "; 
    echo var_dump($m || $n);
    echo "<br>";

    echo "For !m , the result is "; 
    echo var_dump(!$m);
    echo "<br>";
    
    // IF_ELSE Ladder
    $age = 24;

    If ($age>18){
    Echo "you can drink water with chai and alcohol";
    }
    Elseif($age>13){
    Echo "you can drink chai only with water. No alcohol for you";
    }
    Else{
    Echo "you can drink water only";
    }
    ?>
    <?php
    //SWITCH CASE
    $age = 56;

    switch($age){
        case 12:
            echo "You are 12 years old <br>";
            break;
        case 45:
            echo "You are 45 years old <br>";
            break;
        case 56:
            echo "You are 56 years old boy <br>";
            break;
        default:
            echo "Your age is weird <br>";
            break;
        }

    //WHILE LOOP
    $i = 0;
    while($i<5){
        echo "The value of i is ";
        echo $i+1;
        echo "<br>";
        $i+=1;
    }
    ?>
    <?php
    //FOR LOOP
    for ($index=1; $index < 6; $index++) {
        echo "The number is $index <br>";
    }

    //DO WHILE LOOP
    $i = 0;
    do{
        echo "$i <br>";
        $i++;
    }while($i<5);
    ?>
    <?php
    echo "Welcome to the world of foreach loops <br>";
    $arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");

    for ($i=0; $i < count($arr); $i++) { 
        echo $arr[$i];
        echo "<br>";
    }

    // Better way to do this - foreach loops
    foreach ($arr as  $value) {
        echo "$value <br>";
    }
    ?>
    <?php
    //FUNCTIONS

    function avgMarks($marksArr){
        $sum = 0;
        $i = 1;
        foreach ($marksArr as $value) {
            $sum += $value;
            $i++;
        }
        return $sum/$i;
    }

    $rohanDas = [34, 98, 45, 12, 98, 93];
    $sumMarks = avgMarks($rohanDas);

    $harry = [99, 98, 93, 94, 17, 100];
    $sumMarksHarry = avgMarks($harry);
    echo "Total marks scored by Rohan out of 600 is $sumMarks <br>";
    echo "Total marks scored by Harry out of 600 is $sumMarksHarry";
    ?>
    <?php
    // DATES
    echo "Welcome to the world of dates<br>";
    $d = date("dS F Y");
    $d = date("dS F Y, g:i A");
    echo "Todays date is $d <br>";
    // Prints something like: Monday 8th of August 2005 03:12:46 PM
    echo date('l jS \of F Y h:i:s A'); //The backslash is used with each letter to make it differ from the special characters or the arguments of the date function.
    $year = date("Y");
    echo "<br>";
    echo "Copyright $year | All rights reserved <br>";
    ?>
    <?php
    echo "Welcome to associative arrays in php ";
    // These are called indexed arrays:
    $arr = array('this', 'that', 'what');
    echo $arr[0];
    echo $arr[1];
    echo $arr[2]; 

    // Associative arrays
    $favCol = array('shubham' => 'red','rohan'=> 'green',
                        'harry'=> 'brown', 8=>'this' );
                        // echo $favCol['harry'];
                        // echo "<br>";
                        // echo $favCol['rohan'];
                        // echo "<br>";
                        // echo $favCol[8]; 
    foreach ($favCol as $key => $value) {
        echo "<br>Favorite color of $key is $value";
    }

    //Multi-dimensional Array
    // Creating a 2 dimensional array
    $multiDim = array(array(2,5,7,8),
    array(1,2,3,1),
    array(4,5,0,1));
    for ($i=0; $i < count($multiDim); $i++) { 
        for ($j=0; $j < count($multiDim[$i]); $j++) { 
            echo $multiDim[$i][$j];
            echo " ";
        }
        echo "<br>";
    }
    ?>
    <?php
    echo "Welcome to scope and local/global vars in php<br>";
    $a = 98; // Global Variable
    $b = 9;
    function printValue(){
        // $a = 97; // Local Variable
        global $a, $b; // Give me the access to this global variable
        // $a = 100;//this change will also be reflected outside the function.
        // $b = 1000;
        echo "<br>The value of your variable a is $a and b is $b";
    }
    echo $a; 
    printValue();
    echo "<br>The value of your variable a is $a and b is $b";
    echo "<br>";
    //note:- There is another type of variable in Php called static variables. Variables are deleted from memory after the execution completes. But static variables are not deleted and kept inside the memory even after the execution completes.
    echo var_dump($GLOBALS); 
    echo var_dump($GLOBALS["a"]); //All the global variables in Php are stored in an array named $GLOBALS[index]. Where the index is the name of the variable.
    echo var_dump($GLOBALS["b"]);
    ?>
    <!-- GET method => The get method sends the information of the user with the page request. This information can be seen in the URL of the page. This information is separated by ? character. -->
    <form action = "<?php $_PHP_SELF?>" method = "GET"> <!--$_PHP_SELF is a special variable that contains the name of the current PHP page.-->
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
    </form>   
    <!-- Note: $_POST is an associative array in PHP that contains all the information sent through the POST method. -->
    <!-- POST method => The post method sends the data to the backend. The information is encoded and put into the header known as QUERY_STRING. The user cannot see this information from the URL of the page. -->
    <form action = "<?php $_PHP_SELF ?>" method = "POST">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
    </form>
    <!--Note: $_GET is an associative array in PHP that contains all the information sent through GET method.-->
    <?php
    // PHP provides $_REQUEST variable that allows to access the contents of both POST and GET methods.
    if( $_REQUEST["name"] || $_REQUEST["age"] ) {
        echo "Welcome ". $_REQUEST['name']. "<br />";
        echo "You are ". $_REQUEST['age']. " years old.";
    }
    ?>
    <?php
    // use the $_SERVER['REQUEST_METHOD'] to check if the data is received through GET or POST method.
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['pass'];
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your email ' . $email.' and password '. $password.' has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
    </div>';
    // Submit these to a database
    }
    ?>
</body>
</html>
