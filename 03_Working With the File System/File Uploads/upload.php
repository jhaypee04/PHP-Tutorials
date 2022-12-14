<?php

$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1; //Yes
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

echo "Filename: " . $_FILES['fileToUpload']['name']."<br>";
echo "Temp name: " . $_FILES['fileToUpload']['tmp_name'] ."<br>";

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    }
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOK = 0;
}

// Check if $uploadOk is set to 0 by an error
if($uploadOk == 0) {
    echo "Sorry, Your file was not uploaded.";
    // if everything is ok, upload the file to the server
} else{
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file )){
        echo "The file " .htmlspecialchars( basename( $_FILES["fileToUpload"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
      }
}


?>