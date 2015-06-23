<?php

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
class CatagoryDaoPDO {
    //put your code here
    
     public function GetDbTag(){
       return $this->DbTag;
    }
    
    public function saveIntoCatagory($objCatagory) {
        $query = "INSERT INTO catagory(catagory_id, catagory_name, lft, rgt) values(:PPU_TYPE_ID, :TYPE)";
        try{
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
}

    public function retrieveFullTree($objCatagory){
        $query = "SELECT node.catagory_name FROM catagory AS node, catagory AS parent WHERE node.lft BETWEEN parent.lft AND parent.rgt AND parent.catagory_name = 'BOOKS' ORDER BY node.lft";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue();
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
        
    }
}