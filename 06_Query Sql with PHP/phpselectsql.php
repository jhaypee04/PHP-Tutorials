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

        // Querying SQL using PHP
        // Getting Data from db
        // using SELECT
        $sql = "SELECT id,name,email, finishedproject FROM php_students";

        $result = mysqli_query($conn, $sql);

        
        if(mysqli_num_rows($result) > 0) {
            // Output all the data in every row
            
            while($row = mysqli_fetch_assoc($result)){
                echo "<br>id: " . $row["id"] . "<br>Name: " . $row['name'] . "<br>Email: " . $row['email'] . "<br>Finished Projects: " . $row['finishedproject'] . "<br>";
            }
        }else{
            
        }

        mysqli_close($conn);
    ?>
</body>
</html>