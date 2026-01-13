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
            text-align: center;
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

   
    ?>
     </div>
</body>
</html>