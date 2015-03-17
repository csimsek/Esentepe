<?php
/**
 * Created by PhpStorm.
 * User: xacam
 * Date: 17/03/15
 * Time: 14:22
 */

class FunctionEngine extends DatabaseEngine{
    public $dbEngine = null;

    // Category Functions
    function addCategory($categoryName){
        $sql = "INSERT INTO categories (categoryName) values (:categoryName)";
        $inputs = array(':categoryName' => $categoryName);

        $this->dbEngine->executeQuery($sql,$inputs);
    }

    function deleteCategory($categoryID){
        
        $sql = "delete from categories where categoryID=:categoryID";
        $inputs = array(':categoryID' => $categoryID);

        $this->dbEngine->executeQuery($sql,$inputs);
    }

    function editCategory($categoryID,$newCategoryName){
        
        $sql = "update categories set categoryName = :categoryName where categoryID=:categoryID";
        $inputs = array(
            ':categoryName' => $newCategoryName,
            ':categoryID'   => $categoryID
        );
        $this->dbEngine->executeQuery($sql,$inputs);
    }

    function listCategories(){
        $sql = 'SELECT * FROM categories ORDER BY categoryID ASC';
        $datas = $this->dbEngine->getData($sql);

        foreach ($datas as $data) {
            echo $data['categoryName'];
        }
    }

// Product Functions
    function addProduct($productName,$categoryID,$productType){
        
        $sql = "INSERT INTO products (productName,categoryID,productType) values (:productName,:categoryID,:productType)";
        $inputs = array(
            ':productName' => $productName,
            ':categoryID'  => $categoryID,
            ':productType' => $productType
        );

        $this->dbEngine->executeQuery($sql,$inputs);
    }

    function deleteProduct($productID){
        
        $sql = "delete from products where productID=:productID)";
        $inputs = array(':productID' => $productID);

        $this->dbEngine->executeQuery($sql,$inputs);
    }

    function editProduct($productID,$newProductName,$newProductType,$newCategoryID){
        
        $sql = "update products set productName=:newProductName,productType=:newProductType,categoryID=:newCategoryID where prodcutID=:productID";
        $inputs = array(
            ':productID'        => $productID,
            ':newProductName'   => $newProductName,
            ':newProductType'   => $newProductType,
            ':newCategoryID'    => $newCategoryID
        );

        $this->dbEngine->executeQuery($sql,$inputs);
    }

// Tariff Functions
    function addTariff($productID,$productTariff){
        
        $sql = "INSERT INTO products_tariffs values (productID,price) (:productID,:productTariff)";
        $inputs = array(
            ':productID'        => $productID,
            ':productTariff'    => $productTariff
        );

        $this->dbEngine->executeQuery($sql,$inputs);
    }

}