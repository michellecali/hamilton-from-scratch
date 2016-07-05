<?php

// Define the file.
$storage = "ttt.txt";

// Write to the file.
$file_connection = fopen($storage, 'w') or die("Error opening file!");

fwrite($file_connection, echo "$status\n");
fclose($file_connection);
?>