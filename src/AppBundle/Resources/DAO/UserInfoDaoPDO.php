<?php
namespace AppBundle\Resources\DAO;

use JMS\DiExtraBundle\Annotation as DI;
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

/**
 * @DI\Service("userInfo.dao")
 */
class UserInfoDaoPDO extends BaseDaoPDO{
    //put your code here
      public function getDbTag(){
       return $this->dbTag;
    }
    
    public function insertIntoUserInfo($objUserInfo){
          $query = "INSERT INTO user_info(user_info_id, user_id, name, location, sex, age, contact) values(:USER_INFO_ID, :USER_ID, :NAME, :LOCATION, :SEX, :AGE, :CONTACT)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':USER_INFO_ID', $objBooks->getUserInfoId());
            $stmt->bindValue(':USER_ID', $objBooks->getUserId());
            $stmt->bindValue(':NAME', $objBooks->getName());
            $stmt->bindValue(':LOCATION', $objBooks->getLocation());
            $stmt->bindValue(':SEX', $objBooks->getSex());
            $stmt->bindValue(':CONTACT', $objBooks->getContact());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
    }
}
