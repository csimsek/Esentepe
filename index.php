<?php
/**
 * Created by PhpStorm.
 * User: xacam
 * Date: 12/03/15
 * Time: 15:57
 */

require_once('system/classes/ApplicationEngine.php');
require_once('system/classes/DatabaseEngine.php');
//require_once('system/classes/FunctionEngine.php');

$appEngine = new ApplicationEngine();
$dbEngine  = new DatabaseEngine();


$requestURI     = explode('/',$_SERVER['REQUEST_URI']);
$pageLink       = $requestURI[1];

if ($pageLink == 'service'){
    $displayType        = 'service';
    $includeFileName    = 'webService';
}else{
    $displayType        = 'page';
    $includeFileName    = 'main';
}

$pageHeaderNeed = false;
$pageMenuNeed   = false;
$pageFooterNeed = false;


if ($pageLink == '' || $pageLink == 'main'){
    $includeFileName    = 'main';
    $pageHeaderNeed     = true;
    $pageMenuNeed       = true;
    $pageFooterNeed     = true;
}

if ($pageLink == 'reports'){
    $includeFileName    = 'reports';
    $pageHeaderNeed     = true;
    $pageMenuNeed       = true;
    $pageFooterNeed     = true;
}


if ($pageHeaderNeed == true){
    require_once($appEngine->pageBasePath . 'header.php');
}

if ($pageMenuNeed == true){
    require_once($appEngine->pageBasePath . 'menu.php');
}

if ($displayType == 'service'){
    require_once($appEngine->serviceBasePath . $includeFileName . '.php');
}else{
    require_once($appEngine->pageBasePath . $includeFileName . '.php');
}

if ($pageFooterNeed == true){
    require_once($appEngine->pageBasePath . 'footer.php');
}