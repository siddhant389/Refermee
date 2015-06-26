<?php
namespace AppBundle\Resources\DAO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of userLoginDao
 *
 * @author surbhi
 */

/**
 *  @DI\Service("userLogin.dao", parent="base.dao")
 */
class UserLoginDaoPDO extends BaseDaoPDO {
    //put your code here
    public function getDbTag(){
       return $this->dbTag;
    }
    public function saveIntoUserLogin($objUserLogin) {
       try{
        $conn = $this->getConnection();
        $saveQuery = "INSERT INTO userlisher_login(user_id, username, email, password, registration_timestamp) VALUES (:USER_ID, :USERNAME, :EMAIL, :PASSWORD, :REGISTRATION_TIMESTAMP)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":USER_ID", $objPublisherLogin->getUserId());
        $q->bindParam(":USERNAME", $objPublisherLogin->getUsername());
        $q->bindParam(":EMAIL", $objPublisherLogin->getEmail());
        $q->bindParam(":PASSWORD", $objPublisherLogin->getPassword());
        $q->bindParam(":REGISTRATION_TIMESTAMP", $objPublisherLogin->getRegistrationTimestamp());
        
        $q->execute();
        } catch (\Exception $e) {
                $this->throwPDOException($e);
        
        }
      }

    
}
