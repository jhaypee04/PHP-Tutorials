<html>
    <head>
        <title>File Uploads</title>
    </head>
    <body>
        <form action="upload.php" method="post" enctype="multipart/form-data">
          Select image to upload:
          <input type="file" name="fileToUpload" id="fileToUpload">
            <br>
          <input type="submit" name="submit">
        </form>
    </body>
</html>