<?php
/**
 * Created by PhpStorm.
 * User: xacam
 * Date: 09/03/15
 * Time: 16:14
 */

class DatabaseEngine {
    var $dbHost = 'localhost';
    var $dbUser = 'root';
    var $dbName = 'esentepe_db';
    var $dbPass = 'dbPassword';
    var $dbConn;

    function __construct() {
        $this->dbConnect();
    }

    function dbConnect(){
        try {
            $this->dbConn = new PDO("mysql:host=".$this->dbHost.";dbname=".$this->dbName.";charset=utf8", $this->dbUser, $this->dbPass);
        } catch ( PDOException $e ){
            print $e->getMessage();
        }
    }

    function search(){
        $query = $this->dbConn->prepare("INSERT INTO uyeler SET
          uye_kadi = :kadi,
          uye_sifre = :sifre,
          uye_eposta = :eposta");

        $insert = $query->execute(array(
            "sifre" => "123456",
            "eposta" => "tayfunerbilen@gmail.com",
            "kadi" => "Tayfun Erbilen",
        ));
    }

    function delete(){
        $delete = $db->exec("DELETE FROM uyeler");
    }

    function update(){
        $query = $this->dbConn->prepare("INSERT INTO uyeler SET
          uye_kadi = :kadi,
          uye_sifre = :sifre,
          uye_eposta = :eposta");

        $insert = $query->execute(array(
            "sifre" => "123456",
            "eposta" => "tayfunerbilen@gmail.com",
            "kadi" => "Tayfun Erbilen",
        ));
    }

    function insert(){
        $query = $this->dbConn->prepare("INSERT INTO uyeler SET
          uye_kadi = :kadi,
          uye_sifre = :sifre,
          uye_eposta = :eposta");

        $insert = $query->execute(array(
            "sifre" => "123456",
            "eposta" => "tayfunerbilen@gmail.com",
            "kadi" => "Tayfun Erbilen",
        ));
    }
}