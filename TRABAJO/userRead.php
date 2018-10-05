<?php

/* 
 * Modelo para consultar la clase usuario
 */

$query ="SELECT * 
         FROM usuario";

$con ->setQuery($Query);
$nreg = $con->totalRecords();

