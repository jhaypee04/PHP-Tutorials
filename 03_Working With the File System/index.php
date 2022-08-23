<?php
// Using php to read, write files

// Creating a file
$myfile = fopen("myfirstfile.txt", "r" );

// Reading a file
// fread()
echo fread($myfile, 100 );
// A better way to read files
echo fread($myfile, filesize("myfirstfile.txt") );

// Checking the existence of a file
// file_exists()
echo file_exists("myfirstfile.txt");

// Determining the size of a file
// filesize()
echo '<br> ' . filesize("myfirstfile.txt");

// Closing an already opened file
// fclose
fclose($myfile);

// Writing to a file
$newfile = fopen('newfile.txt', 'w');

// fwrite
fwrite($newfile, "This is a new file, created with fwrite function");

// fread()
// echo '<br> '. fread($newfile, 100 );

fclose($newfile);

// Working with directories in PHP
// mkdir()
mkdir("File Uploads");



?>