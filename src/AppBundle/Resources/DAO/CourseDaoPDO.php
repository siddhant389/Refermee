<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CourseDaoPDO
 *
 * @author surbhi
 */
class CourseDaoPDO {
    //put your code here
    public function GetDbTag(){
       return $this->DbTag;
    }
    
    public function SaveIntoCourse($objCourse) {
        $query = "INSERT INTO Course(course_id, course_name) values(:COURSE_ID, :COURSE_NAME)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':COURSE_ID', $objCourse->getCourseId());
            $stmt->bindValue(':COURSE_NAME', $objCourse->getCourseName());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
    }
    
}
