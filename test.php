<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
<?php

function add_five(&$value) { 
    $value += 5; 
} 

$num = 2; 
add_five($num); 
echo $num;

?>
        
        <script src="" async defer></script>
    </body>
</html>