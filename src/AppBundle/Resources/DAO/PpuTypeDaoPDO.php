<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PpuTypeDaoPDO
 *
 * @author surbhi
 */
class PpuTypeDaoPDO {
    //put your code here
    public function GetDbTag(){
       return $this->DbTag;
    }
    
    public function SaveIntoPpuType($objPpuType) {
        $query = "INSERT INTO ppu_type(ppu_type_id, ppu_type) values(:PPU_TYPE_ID, :PPU_TYPE)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':PPU_TYPE_ID', $objPpuType->getPpuTypeId());
            $stmt->bindValue(':PPU_TYPE', $objPpuType->getPpuType());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
        //return false;
        
    }
    public function GetFromPpuType($objPpuType) {
        $query = SELECT * FROM ppu_type()
    }
}