

   
<?php
    $conn = new mysqli('localhost','root','','usuarios');
    if($conn->connect_error){//-> de conn
        echo $error = $conn->connect_error; 
    }
    
?>
     
