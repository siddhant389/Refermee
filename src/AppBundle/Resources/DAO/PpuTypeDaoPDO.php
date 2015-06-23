<?php
namespace AppBundle\Resources\DAO;
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
class PpuTypeDaoPDO extends BaseDaoPDO {
    //put your code here
    public function getDbTag(){
       return $this->dbTag;
    }
    
    public function saveIntoPpuType($objPpuType) {
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
    public function GetFromPpuType($objPpuType);
        
    }

