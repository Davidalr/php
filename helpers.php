<?php
//Declarando una funcion
function view($template, $vars = array())
{
    extract($vars);

    require "views/$template.tpl.php";
}
function controller($name)
{
    $file = "controllers/$name.php";

    if (file_exists($file))
    {
        require $file;
    }
    else
    {

        header("HTTP/1.0 404 Not Found");
        exit("pagina no encontrada");

    }

}








