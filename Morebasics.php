<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .container{
            max-width: 80%;
            background-color: lightgrey;
            margin: auto;
            padding: 23px;
            font-family: sans-serif;
            text-align: left;
            border-radius: 10px;
            box-shadow: 2px 2px 10px grey;
        }
        h1{
            text-decoration: underline;
        }
    </style>
    <div class="container">
    <h1>This is PHP</h1>
    <?php
    
    
    $age = 19;
    if($age>18){
        echo "You can go to the party";
    }
    else if($age==7){
        echo "You are 7 years old";
    }
    else if($age==6){
        echo "You are 6 years old";
    }
    else{
        echo "You can not go to the party";
    }


    // Array
    $languages = array("Python", "C++", "PHP", "JavaScript");
    echo "<br>";
    echo $languages[0];
    echo $languages[1];
    echo $languages[2];

    // Loops
    echo "<br>";
    $a = 0;
    while($a<=10){
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }


    //iterating arrays using loops

    $a = 0;
    while($a< count($languages)){
        echo "<br> The value of languages at $a is: ";
        echo $languages[$a];
        $a++;
    }

    //for loop
    echo "<br>Using for loop";
    for ($i=1; $i < 11; $i++) { 
        echo "<br> $i";
    }

    //foreach loop
    echo "<br>Using for each loop";
    foreach ($languages as $values){
        echo "<br> values of languages are : ";
        echo $values;
    }

    //creating a function

    echo" <Br> using a function";

    function print1(){
        echo "<br> We are inside the print function";
    }
    print1();

    function print_number($number){
        echo "<br> the number is : $number ";
    }

    print_number(45);
    print_number(34);
    print_number(12);
    ?>
     </div>
</body>
</html>

