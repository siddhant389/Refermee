<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserInfoDaoPDO
 *
 * @author surbhi
 */
class UserInfoDaoPDO {
    //put your code here
      public function GetDbTag(){
       return $this->DbTag;
    }
    
    public function InsertIntoUserInfo($objUserInfo){
          $query = "INSERT INTO user_info(user_info_id, user_id, name, location, sex, age) values(:USER_INFO_ID, :USER_ID, :NAME, :LOCATION, :SEX, :AGE)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':USER_INFO_ID', $objBooks->getUserInfoId());
            $stmt->bindValue(':USER_ID', $objBooks->getUserId());
            $stmt->bindValue(':NAME', $objBooks->getName());
            $stmt->bindValue(':LOCATION', $objBooks->getLocation());
            $stmt->bindValue(':SEX', $objBooks->getSex());
            $stmt->bindValue(':AGE', $objBooks->getAge());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
    }
}
