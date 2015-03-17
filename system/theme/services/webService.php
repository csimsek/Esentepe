<?php
/**
 * Created by PhpStorm.
 * User: xacam
 * Date: 12/03/15
 * Time: 16:15
 */
require_once('/var/www/html/system/classes/ApplicationEngine.php');
require_once('/var/www/html/system/classes/DatabaseEngine.php');

$appEngine = new ApplicationEngine();
$dbEngine  = new DatabaseEngine();



if ($_GET['do'] == 'addCategory'){
    try{
        addCategory($_POST['categoryName']);
        echo 'OK';
    }catch(Exception $e){
        echo 'NOT OK';
    }
}

if ($_GET['do'] == 'deleteCategory'){
    try{
        deleteCategory($_POST['categoryID']);
        echo 'OK';
    }catch(Exception $e){
        echo 'NOT OK';
    }
}

if ($_GET['do'] == 'editCategory'){
    try{
        editCategory($_POST['categoryID'],$_POST['categoryName']);
        echo 'OK';
    }catch(Exception $e){
        echo 'NOT OK';
    }
}

if ($_GET['do'] == 'listCategories'){
    try{
        listCategories();
    }catch(Exception $e){
        echo 'NOT OK';
    }
}

if ($_GET['do'] == 'addProduct'){
    try{
        addProduct($_POST['productName'],$_POST['categoryID'],$_POST['productType']);
        echo 'OK';
    }catch(Exception $e){
        echo 'NOT OK';
    }
}

if ($_GET['do'] == 'deleteProduct'){
    try{
        deleteProduct($_POST['productID']);
        echo 'OK';
    }catch(Exception $e){
        echo 'NOT OK';
    }
}

if ($_GET['do'] == 'editProduct'){
    try{
        editProduct($_POST['productID'],$_POST['productName'],$_POST['productType'],$_POST['categoryID']);
        echo 'OK';
    }catch(Exception $e){
        echo 'NOT OK';
    }
}

if ($_GET['do'] == 'addTariff'){
    try{
        addTariff($_POST['productID'],$_POST['productTariff']);
        echo 'OK';
    }catch(Exception $e){
        echo 'NOT OK';
    }
}

addCategory('POKEMON');