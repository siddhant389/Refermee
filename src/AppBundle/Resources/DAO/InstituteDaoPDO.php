<?php
namespace AppBundle\Resources\DAO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of InstituteDaoPDO
 *
 * @author surbhi
 */
class InstituteDaoPDO extends BaseDaoPDO {
    //put your code here
     public function getDbTag(){
       return $this->dbTag;
    }
    public function saveIntoInstitute($objInstitute) {
        $query = "INSERT INTO Institute(institute_id, institute_name) values(:INSTITUTE_ID, :INSTITUTE_NAME)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':INSTITUTE_ID', $objCourse->getInstituteId());
            $stmt->bindValue(':INSTITUTE_NAME', $objCourse->getInstituteName());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
    }
}
