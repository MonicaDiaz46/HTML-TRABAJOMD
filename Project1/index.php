<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1>
            <?php
             // Esto es Un comentario / variables
            $PrimeraVariable=2;
            $SegundaVariable=5;
            $lenguaje="Javascipt";
          
          //otra manera
          //if ($PrimeraVariable ==2 && $SegundaVariable==5{}
           if ($PrimeraVariable <1){
               echo 'Soy menor';
           }
           else{
               echo 'Soy Mayor';
           }
           switch ($lenguaje) {
               case "PHP":
                   echo 'PHP';
                   break;
               case"Javascript":
                   echo 'Javascript';
                   break;
               case"html":
                   echo 'html';
                   break;
           }
           echo '<br>';
           $Arreglo=array ("Hola",1,"hello");
           //print_r($Arreglo);
          // echo'Arreglo'[2]."<br>".$Arreglo[0];
            //Arreglos 
           //echo $segundavariable
             ?>  
            <h1>
             <pre>
                <h3>
                    <?PHP
                   var_dump($Arreglo);// print_r($Arreglo)
                   $Arreglo="Pyton";
                    var_dump($Arreglo);
                    
                    $Usuarios=array ('Nombre'=> "Juan","Apellido"=> "Zabala","Cedula"=> 1234);
                    echo "<h1>".$Usuarios['Nombre']."</h1>";
                    
                    ?>
                </h3>
             </pre>
            </h1>
        </h1>
        <p>
            <h2>
                ////54848484845554545545
                <?PHP
                    echo 'Esta es Otra Sección';
                 ?>
            </h2>
        </p>
    </body>
</html>
