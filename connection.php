<?php 
   $con = mysqli_connect('localhost', 'root', '', 'ui');

    if (!$con) {
        die("Error connecting to database: " . mysqli_connect_error()); 
        // Use die() and mysqli_connect_error()
    }
?>