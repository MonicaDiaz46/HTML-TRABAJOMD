<pre>
	<?php
		$lenguajes=['html',
			'css','javascript'];
		print_r($lenguajes);
		echo "<br>";
		var_dump($lenguajes)
	?>

      <?php
                //Funcion Sin parámetros
                function saludar(){
                    echo'<h2>'.'Hola A Todos'.'</h2';
                }
                saludar();
                 echo "<br>";
                //Función con parámetros

            function Usuario ($Nombres,$Tel){ 
                var_dump($Nombres);
               // print_r($Nombres);
               /* foreach ($Nombres as $Nombres){
                    echo "Nombres:".$Nombres. '<br>';        
                }*/
                echo 'Telefono:'.$Tel.'<br>';
            }

            echo "<br>";
            $Usuarios=["Juan","Felipe","Alejandro"];
            Usuario($Usuarios,1234);
            echo '<br>';
            function Suma($Num1,$Num2){
                /*$Sumar= $Num1 + $Num2;
                return $Sumar;*/
                return $Num1+$Num2;
            }
            $Result= Suma(5,9);
            echo "Suma: ".$Result;
            echo '<br>';
            //Acceder a variables Globales desde Función 
            $Agenda=array();
            function agendar  ($Nombre,$Tele){
               global  $Agenda; //Acceder a la variable Global 
                    $Agenda[]=$Nombre;
                    $Agenda[]=$Tele;
            }
            agendar("Felipe",1458);
            print_r($Agenda);
    ?>

</pre>
