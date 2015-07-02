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
        $objUserInfo = new UserInfoDaoPDO;
          
        try{
            $dbconn = $this->getConnection();
            $query = "INSERT INTO user_info(user_info_id, user_id, name, location, sex, age, contact) values(:USER_INFO_ID, :USER_ID, :NAME, :LOCATION, :SEX, :AGE, :CONTACT)";
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
    
     public function getUserInfo ($objUserInfo){
         $arrRow = array();
         $arrTemp = array();
         $objUserLoginDao = new UserLoginDaoPDO();
         try{
        $conn = $this->getConnection();
        $saveQuery = "SELECT username, email FROM user_login";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":USER_ID", $objUserDetails->getUserId());
        $q->bindParam(":USERNAME", $objUserDetails->getUsername());
        $q->bindParam(":EMAIL", $objUserDetails->getEmail());
        $q->bindParam(":PASSWORD", $objUserDetails->getPassword());
         //$objUserDetails->getRegistrationTimestamp());
         $q->execute();
         while($arrDetail = $q->fetch(PDO::FETCH_ASSOC))
           {
            $arrRow = $arrDetail['username'];
            $arrTemp = $arrDetail['email'];
          echo '<pre>';  print_r($arrRow); echo '</pre>'; 
         echo '<pre>';  print_r($arrTemp); echo '</pre>'; 
         }
      // $arrDetail = $q->fetch(PDO::FETCH_ASSOC);
       //print_r($arrDetail);
        } catch (PDOException $e) {
            echo 'exception ' . $e->getMessage();
                        }
     }
}
