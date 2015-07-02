<?php

namespace AppBundle\Resources\DAO;
use JMS\DiExtraBundle\Annotation as DI;
use PDO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CatagoryDaoPDO
 *
 * @author surbhi
 */

/**
 * @DI\Service("catagory.dao")
 */
class CatagoryDaoPDO extends BaseDaoPDO {

    //put your code here

    public function getDbTag() {
        return $this->dbTag;
    }

    public function saveIntoCatagory($objCatagory) {
        $query = "INSERT INTO catagory(catagory_id, catagory_name, lft, rgt) values(:CATAGORY_ID, :CATAGORY_NAME, :LFT, :RGT)";
        try {
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':CATAGORY_ID', $objCatagory->getCatagoryId());
            $stmt->bindValue(':CATAGORY_NAME', $objCatagory->getcatagoryName());
            $stmt->bindValue(':LFT', $objCatagory->getLft());
            $stmt->bindValue(':RGT', $objCatagory->getRgt());
            $stmt->execute();
        } catch (Exception $ex) {
            $this->throwPDOException($e);
        }
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($result);
    }

    public function retrieveFullTree($objCatagory) {
        $query = "SELECT node.catagory_name FROM catagory AS node, catagory AS parent WHERE node.lft BETWEEN parent.lft AND parent.rgt AND parent.catagory_name = :CATAGORY_NAME ORDER BY node.lft";
        try {
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':CATAGORY_NAME', $objCatagory->getCatagoryName());
            $stmt->execute();
            $arrDetail = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $ex) {
            $this->throwPDOException($e);
        }
    }

    public function retrieveLeafNodes($objCatagory) {
        $objCatagoryDao = new CatagoryDaoPDO();
        $arrRow = array();
        $query = "SELECT catagory_name FROM catagory WHERE rgt = lft +1";
        try {
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':CATAGORY_NAME', $objCatagory->getCatagoryName());
            $stmt->execute();
            while($arrDetail = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $arrRow = $arrDetail['catagory_name'];
              echo '<pre>';  print_r($arrRow); echo '</pre>'; 
            }
                
             } catch (Exception $ex) {
            $this->throwPDOException($e);
        }
        
    }

    public function retrieveSinglePath($objCatagory) {
        $query = "SELECT parent.catagory_name FROM catagory AS node, catagory AS parent WHERE node.lft BETWEEN parent.lft AND parent.rgt AND node.catagory_name = :CATAGORY_NAME ORDER BY node.lft";
        try{
             $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':CATAGORY_NAME', $objCatagory->getCatagoryName());
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        print_r($result);
        } catch (Exception $ex) {
            $this->throwPDOException($e);
        }
    }
    
    public function depthOfNodes($objCatagory){
        $query = "SELECT node.catagory_name, (COUNT(parent.catagory_name) - 1) AS depth FROM catagory AS node, catagory AS parent WHERE node.lft BETWEEN parent.lft AND parent.rgt  GROUP BY node.catagory_name ORDER BY node.lft";
        try{
             $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':CATAGORY_NAME', $objCatagory->getCatagoryName());
            $stmt->execute();
           $arrDetail = $stmt->fetchAll(PDO::FETCH_ASSOC);
            print_r($arrDetail);
        } catch (Exception $ex) {
           echo 'exception ' . $e->getMessage();die;
        }
    }
    public static function addNodes($objCatagory) {
        $query = "LOCK TABLE catagory WRITE; SELECT @myRight := rgt FROM catagory WHERE catagory_name = :CATAGORY_NAME; UPDATE catagory SET rgt = rgt + 2 WHERE rgt > @myRight; UPDATE catagory SET lft = lft + 2 WHERE lft > @myRight; INSERT INTO catagory(catagory_name, lft, rgt) VALUES('newCatagory', @myRight + 1, @myRight + 2); UNLOCK TABLES";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':CATAGORY_NAME', $objCatagory->getCatagoryName());
            $stmt->execute();
            $arrDetail = $stmt->fetchAll(PDO::FETCH_ASSOC);
            print_r($arrDetail);
            
        } catch (Exception $ex) {
            $this->throwPDOException($e);
        }
    }

    public static function deleteNodes ($objCatagory) {
        $query = "LOCK TABLE catagory WRITE; SELECT @myLeft := lft, @myRight := rgt, @myWidth := rgt - lft + 1 FROM catagory WHERE catagory_name = :CATAGORY_NAME; DELETE FROM catagory WHERE lft BETWEEN @myLeft AND @myRight; UPDATE catagory SET rgt = rgt - @myWidth WHERE rgt > @myRight; UPDATE catagory SET lft = lft - @myWidth WHERE lft > @myRight; UNLOCK TABLES";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':CATAGORY_NAME', $objCatagory->getCatagoryName());
            $stmt->execute();
            $arrDetail = $stmt->fetchAll(PDO::FETCH_ASSOC);
            print_r($arrDetail);
            
        } catch (Exception $ex) {
            $this->throwPDOException($e);
        }
        
    }
    

}
