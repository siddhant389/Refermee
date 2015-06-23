<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SubsTypeDaoPDO
 *
 * @author surbhi
 */
class SubsTypeDaoPDO extends BaseDaoPDO {
    //put your code here
     public function getDbTag(){
       return $this->dbTag;
    }
    
    public function saveIntoSubsType($objSubsType) {
        $query = "INSERT INTO subs_type(subs_type_id, type) values(:SUBS_TYPE_ID, :TYPE)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':SUBS_TYPE_ID', $objSubsType->getTypeId());
            $stmt->bindValue(':TYPE', $objSubsType->getType());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
        //return false;
        
    }
}
