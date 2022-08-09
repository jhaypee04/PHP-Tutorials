<!DOCTYPE html>
<html>
<body>

    Welcome <?php echo $_POST["name"]; ?>   <br>
    Your email address is: <?php echo $_POST["email"]; ?>
    

    <?php
//    Redirecting the user
    
  header("Location: http://www.tutorialspoint.com");
//   exit;
?>

</body>
</html>