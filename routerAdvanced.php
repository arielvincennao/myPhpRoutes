<?php

// ** This router only needs routerAdvance.php, AppConfig.php and changing .htacess file to link it


require_once ('libraries/About.php');
require_once ('libraries/Home.php');
require_once ('libraries/Login.php');
require_once ('config/AppConfig.php');

function parseUrl($url){
  $arr_data = explode ("/",$url);
  // Se guarda el nombre de la accion
  $arrayReturn[AppConfig::$ACTION] = $arr_data[0];
  // Se guarda la lista de parametros como un array
  $arrayReturn[AppConfig::$PARAMS] = isset($arr_data[1]) ? array_slice($arr_data, 1) : null;

  return $arrayReturn;
}

// Parsear la URL para identificar Actions y Parametros
$urlData = parseUrl($_GET[AppConfig::$ACTION]);
// Nombre de la Accion a ejecutar
$actionName = $urlData[AppConfig::$ACTION];

if (array_key_exists($actionName,AppConfig::$ACTIONS)){
    $params = $urlData[AppConfig::$PARAMS];
    $methodName = AppConfig::$ACTIONS[$actionName];

    if(isset($params) && $params != null){
      // Invocar el metodo con el array de parametros
      $methodName($params);
    } else {
      $methodName();
    }
} else {
    // No existe la Action entonces muestro la Home
   showHome();
}

 ?>


