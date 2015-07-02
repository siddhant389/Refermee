<?php
namespace AppBundle\Resources\DAO;

use AppBundle\Resources\model\Constants;
use AppBundle\Resources\model\UserDetails;
use PDO;
use PDOException;
use JMS\DiExtraBundle\Annotation as DI;
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
 *  @DI\Service("userLogin.dao")
 */
class UserLoginDaoPDO extends BaseDaoPDO {
    //put your code here
    /** @DI\Inject("%db.tag.refermee%") */
    public $dbTag;
    
    public function getDbTag(){
       return $this->dbTag;
    }
    public function saveIntoUserLogin($objUserDetails) {
       $objUserLoginDao = new UserLoginDaoPDO();
       try{
        $conn = $this->getConnection();
        $saveQuery = "INSERT INTO user_login(user_id, username, email, password) VALUES (:USER_ID, :USERNAME, :EMAIL, :PASSWORD)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":USER_ID", $objUserDetails->getUserId());
        $q->bindParam(":USERNAME", $objUserDetails->getUsername());
        $q->bindParam(":EMAIL", $objUserDetails->getEmail());
        $q->bindParam(":PASSWORD", $objUserDetails->getPassword());
         //$objUserDetails->getRegistrationTimestamp());
        
        $q->execute();
        } catch (PDOException $e) {
            echo 'exception ' . $e->getMessage();
                        }
        
        
      }
     public function getUserDetails ($objUserDetails){
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
