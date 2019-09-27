<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


<?php
    $dayofweek = date("w");

    switch ($dayofweek){
        case 1:
        echo "Today is Monday";
        break;

        case 2:
        echo "Today is tuesday";
        break;

        case 3:
        echo "Today is wednesday";
        break;

        case 4:
        echo "<p>Today is thursday</p>";
        break;

        case 5:
        echo "Today is friday";
        break;

        case 6:
        echo "Today is saturday";
        break;

        case 0:
        echo "Today is sunday";
        break;

    }
?>

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />


<form method="POST">  <!--if we use POST mathod we can't see detials and GET mathod we can see detials-->
    <input type="text" name="number_1" placeholder="Number 1">
    <input type="text" name="number_2" placeholder="Number 2">
    <select name="operator">
        <option>None</option>
        <option>Add</option>
        <option>Subtract</option>
        <option>Multiply</option>
        <option>Divide</option>
    </select>
    <br>
    <button type="submit" name="submit" value="submit">Calculate</button>
</form>

<p>Ans.:</p>

<?php
    if (isset($_POST['submit'])){
        $number1 = $_POST['number_1'];
        $number2 = $_POST['number_2'];
        $operators = $_POST['operator'];

        switch ($operators){
            case None:
                echo "You have to select a method!";
            break;

            case Add:
                echo $number1 + $number2;
            break;

            case Subtract:
                echo $number1 - $number2;
            break;

            case Multiply:
                echo $number1 * $number2;
            break;

            case Divide:
                echo $number1 / $number2;
            break;

        }
    }
?>



<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />

<form action="" method="GET">   <!--I have not right the action beacuse we are not passing any information to another document.-->
    <input name="person" type="text">
    <button>SUBMIT</button>
</form>


<br />
<br />
<br />
<br />
    <?php
        echo 5+2;   //you can do calculation by writing numbers no quotations are required
        print 5+2;  //also work for print
        echo "5+2 is 7"; //it will show on screen 5+2 is 7

        $name="prashant"; //Declare variable 
        echo $name."<br>"; //print name variable
        echo $name." is a nice person.";

        $name = $_GET['person'];
        echo nl2br("$name is a nice person.\n");

        //Array
        $names=array("RAM","DHRUV","ABHIGIT");
        echo $names['1'].nl2br("\n");

        $number = 5;
        $number+=5;
        echo $number.nl2br("\n");
        

    /*Two type of the functions  1)predetermined functions  2)user-defined functions */
        //predetermined functions(functions have parentheses)
        echo strlen("let's start learn PHP "); //count the string lattters
        echo "<br>";
        echo str_word_count("let's start learn PHP "); //count the word og string
        echo "<br>";
        echo strrev("let's start learn PHP "); //reverse the string
        echo "<br>";
        echo strpos("let's start learn PHP","PHP"); //it will show the number of the position of PHP
        echo "<br>";
        echo str_replace("PHP","JAVA","let's start learn PHP "); //
        echo "<br>";

        //user-defined functions 
        function newCalc(){
            
        }


        $x=5;
        $y=10;

        if($x<$y)   //comparison operators
        {
            echo "True";
        }
        else{
            echo "False";
        }

        echo "<br>";
        
        //increment and decrement operators
        $x=5;
        echo ++$x;  //try --$x, $x-- and $x++
        echo $x;
        
        echo "<br>";
        //logical operators
        $x=5;
        $y=10;

        if( $x == $y or $x < $y )   //we can use || instand of or and also try this code for and(&&),xor also.
        {
            echo "True!!!";
        }
        else{
            echo "False";
        }

        echo nl2br("\n");

        $array = array("herry" ,"jeck" ,"sahid");
        foreach ($array as $loopdata) {
            echo "My name is ".$loopdata."<br>";
        }
        
        echo nl2br("\n");

        echo $array[1];
    ?>
</body>
</html>