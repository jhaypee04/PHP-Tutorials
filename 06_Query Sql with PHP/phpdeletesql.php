<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('config.php');

        // Creating the connection
        $conn = mysqli_connect($servername,$username,$password,$database);

        // Check the connection
        if($conn == true){
            echo "Connection was successfull";
        }
        else{
            echo "Connection failed!";
        }

        $sql = "DELETE FROM php_students
                WHERE name='Harry Potter'
        ";

        $result = mysqli_query($conn, $sql);
        if($result){
            echo "record Deleted successfully";
        }
        else{
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    ?>
</body>
</html>