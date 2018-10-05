<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    if(isset($_POST['Documento'])){
           $Documento = $_POST['Documento'];
       }
    if(isset($_POST['Nombre'])){
        $Nombre = $_POST['Nombre'];
    }
    if(isset($_POST['Apellido'])){
        $Apellido = $_POST['Apellido'];
    }
    if(isset($_POST['Telefono'])){
        $Telefono= $_POST['Telefono'];
    }
     if(isset($_POST['Email'])){
        $Email = $_POST['Email'];
    }
     if(isset($_POST['Direccion'])){
        $Direccion = $_POST['Direccion'];
    }
    
   
    //Realiza la conexion a la base de datos
    try{
        require_once 'BD-Conexion.php';
        //query a ejecutar
        $sql = "INSERT INTO `usuarios` (`Documento`,`Nombre`,`Apellido`,`Telefono`,`Email`,`Direccion`)";
        $sql.= "VALUES ('{$Documento}','{$Nombre}','{$Apellido}','{$Telefono}','{$Email}','{$Direccion}')";
        //ejecutamos el query
        $resultado = $conn->query($sql);
        echo 'Los datos fueron ingresados correctamente';
    } catch (Exception $ex) {
        $error = $ex->getMessage();
    }
