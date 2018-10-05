<?php
$conn= new mysqli('localhost:81','root','','usuarios');
if ($conn-> connect_error){
    echo $error= $conn -> connect_error;
}
?>
