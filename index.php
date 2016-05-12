<?php
/*
	ESTOS SON COMENTARIOS PARA EL USUARIO ISS53 DE GIT yo soy hotfix
	ESTE COMENTARIO ES AGREGADO DESPUES QUE LA RAMA HOTFIX HICIERA SU TRABAJO

*/

/*
//echo"<pre>";
//print_r($_SERVER['HTTP_USER_AGENT']);
//print_r($GLOBALS);
//echo"</pre>";
*/
//Configuración global
require_once 'config/global.php';

//Base para los controladores
require_once 'core/ControladorBase.php';

//Funciones para el controlador frontal
require_once 'core/ControladorFrontal.func.php';

//Cargamos controladores y acciones
if(isset($_GET["controller"])){
    $controllerObj=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
}else{

    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    var_dump($controllerObj);
    //exit;
    lanzarAccion($controllerObj);
}
/*
	Problema de urgencia resuelto
	
*/	

?>
