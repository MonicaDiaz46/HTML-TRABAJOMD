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
    ?>

</pre>
