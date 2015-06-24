<?php
namespace AppBundle\Resources\DAO;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class BaseDaoPDO{
    
    public abstract function getDbTag();
    
     public function getConnection () {
        //echo "hello";
        try {
        $dbh = new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,$this->pass);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
                        }
     }
}