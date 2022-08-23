<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP to Connect to MySQL</title>
</head>
<body>
    <?php
        require('config.php');

        // Creating the connection
        $conn = mysqli_connect($servername,$username,$password,$database);

        // Check the connection
        if($conn == true){
            echo "Connection was successfull";
        }
        else{
            echo "Connection failed!";
        }

        

        mysqli_close($conn);
    ?>
</body>
</html>