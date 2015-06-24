<?php
namespace AppBundle\Resources\DAO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of EducationDaoPDO
 *
 * @author surbhi
 */
class EducationDaoPDO extends BaseDaoPDO{
    //put your code here
    public function getDbTag(){
       return $this->dbTag;
    }
    
    public function saveIntoEducation($objEducation) {
        $query = "INSERT INTO Education(user_id, specification_id, course_id, institute_id, year_of_completion) values(:USER_ID, :SPECIFICATION_ID, :COURSE_ID, :INSTITUTE_ID, YEAR_OF_COMPLETION)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':USER_ID', $objEducation->getUserId());
            $stmt->bindValue(':SPECIFICATION_ID', $objEducation->getSpecificationId());
            $stmt->bindValue(':COURSE_ID', $objEducation->getCourseId());
            $stmt->bindValue(':INSTITUTE_ID', $objEducation->getInstituteId());
            $stmt->bindValue(':YEAR_OF_COMPLETION', $objEducation->getYearOfCompletion());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
    }
    
}
