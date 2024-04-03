<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</head>
<body>
    <?php
    //Loop
 
    //While Loop
     //Do while Loop
     //For Loop
     //Foreach Loop
    $x = 1;
    do {
        echo "hi there<br>";
        $x++;
    }
     while ($x <= 5);  
   ?>
    <hr>
    <?php
     for ($x = 0; $x <= 1; $x++)  {
        echo "hi<br>";
     }
    ?>
    <hr>
    <?php
    $array = array ("Daniel", "Jane", "Jacob","John","Mariane");
    foreach ($array as $loopdata)   {
     echo "My name is ".$loopdata. "<br>";
    }
    ?>