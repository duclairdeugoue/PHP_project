<?php
    $con = mysqli_connect('localhost','root','','studentsystem');
    
    if(!$con){
        die('Failed to connect to the server' . mysqli_connect_error());
    }
?>