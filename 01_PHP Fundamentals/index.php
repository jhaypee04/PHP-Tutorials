<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Escaping Character -->
    <?php 
        echo 'Hello World';

        $Str = 'Hello World';
        $str1 = strtolower($Str);
        $str2 = strtoupper($Str);
        echo strlen($Str);
        echo "<br>$str1";
        echo "<br>$str2 <br>";

        #The Trim string method/function
        $string = " trim sides ";
        $string2 = "Trim:".trim($string) ."for me!";
        echo $string2;
    ?>
</body>
</html>