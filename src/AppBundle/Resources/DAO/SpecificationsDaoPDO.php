<?php
namespace AppBundle\Resources\DAO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SpecificationsDaoPDO
 *
 * @author surbhi
 */
class SpecificationsDaoPDO extends BaseDaoPDO {
    //put your code here
      public function getDbTag(){
       return $this->dbTag;
    }
    
    public function saveIntoSpecifications($objSpecifications) {
        $query = "INSERT INTO specifications(specification_id, specification_name) values(:SPECIFICATION_ID, :SPECIFICATION_NAME)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':SPECIFICATION_ID', $objAuthor->getSpecificationId());
            $stmt->bindValue(':SPECIFICATION_NAME', $objAuthor->getSpecificationName());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
}
}
