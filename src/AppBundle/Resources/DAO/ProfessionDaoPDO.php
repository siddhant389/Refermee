<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ProfessionDaoPDO
 *
 * @author surbhi
 */
class ProfessionDaoPDO {
    //put your code here
     public function GetDbTag(){
       return $this->DbTag;
    }
    
    public function SaveIntoProfession($objProfession) {
        $query = "INSERT INTO profession(user_id, specification, profession, organisation) values(:USER_ID, :SPECIFICATION, :PROFESSION, :ORGANISATION)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':USER_ID', $objProfession->getUserId());
            $stmt->bindValue(':SPECIFICATION', $objProfession->getSpecification());
            $stmt->bindValue(':PROFESSION', $objProfession->getProfession());
            $stmt->bindValue(':ORGANISATION', $objProfession->getOrganisation());
             
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
        //return false;
        
    }
}