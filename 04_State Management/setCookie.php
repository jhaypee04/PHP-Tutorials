<?php
$cookie_name = 'user';
$cookie_value = 'John Doe';
setcookie( $cookie_name, $cookie_value, time() + (86400 * 30) ); // 86400 = 1 day
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>setcookie() function</title>
</head>
<body>
    
    <?php
        if(!isset($_COOKIE[$cookie_name])) {
            echo "Cookie named '" . $cookie_name . "' is not set!";
        } 
        else {
            echo "Cookie '" . $cookie_name . "' is set!";
            echo "Value is " . $_Cookie[$cookie_name];
        }
    ?>

</body>
</html>