<?php


// Create connection
$connect =mysqli_connect("localhost","root","","online voting")or die("Connection failed!");

// Check connection
if ($connect) {
    echo "Connected!" ;
}
else{
    echo "Not Connected!";
}
?>