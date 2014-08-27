<?php
/*
 * El fronted controller se
 * encarga de configurar nuestra aplicacion
 */
 require 'config.php';
 require 'helpers.php';

//library
require 'library/request.php';
require 'library/inflector.php';


//llamar al controlador indicado
if (empty($_GET['url']))
{
    $url = "";
}
else
{
   $url = $_GET['url'];
}

$request = new request($url);
$request ->execute();






