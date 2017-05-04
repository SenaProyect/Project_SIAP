<?php

//REQUEST: ESTA ESPERANDO ALGO, REQUIERE DE ALGO de la clase.

//ISSET: VERIFICA SI LA VARIABLE Q ESTA ADENTRO DE LOS PARENTECIS ESTA DEFINIDA O NO DEFINIDA, O ESTA LLENA O NO LLENA
//isset verifica si esta lleno, tipo de respuesta:(true o false)

//! = negacion
if(!isset($_REQUEST['clase'])){//si la variable REQUEST viene vacia haga:


/*se llama el archivo, luego se llama la clase y despues la funcion*/


    $controller="index";

    require_once ('controller/'.$controller.'Controller.php');

    $controller=$controller.'Controller';

    $controller=new $controller();

    $controller->index();/*Llama la funcion index()*/
    
    //$controller->hola();

}else{
    
    $controller=$_REQUEST['clase'];
    require_once ('controller/'.$controller.'Controller.php');
    $controller=$controller.'Controller';
    $controller=new $controller();
    $metodo=isset($_REQUEST['metodo']) ? $_REQUEST['metodo'] : 'index';
    call_user_func(array($controller,$metodo));
    
}
?>