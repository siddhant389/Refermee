<?php

namespace AppBundle\Resources\DAO;

use AppBundle\Resources\model\Constants;
use AppBundle\Resources\model\PublisherDetails;
use PDO;
use PDOException;
use JMS\DiExtraBundle\Annotation as DI;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of publisherLoginDao
 *
 * @author surbhi
 */

/**
 *  @DI\Service("publisherLogin.dao")
 */
class PublisherLoginDaoPDO extends BaseDaoPDO {
    //put your code here
     public function GetDbTag(){
       return $this->DbTag;
    }
    public function saveIntoPublisherLogin($objPublisherLogin) {
        try{
        $conn = $this->getConnection();
        $saveQuery = "INSERT INTO publisher_login(pub_id, pub_username, pub_email, pub_password) VALUES (:PUB_ID, :PUB_USERNAME, :PUB_EMAIL, :PUB_PASSWORD)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":PUB_ID", $objPublisherLogin->getPubId());
        $q->bindParam(":PUB_USERNAME", $objPublisherLogin->getPubUsername());
        $q->bindParam(":PUB_EMAIL", $objPublisherLogin->getPubEmail());
        $q->bindParam(":PUB_PASSWORD", $objPublisherLogin->getPubPassword());
        $q->execute();
        } catch (PDOException $e) {
            echo 'exception ' . $e->getMessage();
                        }
        
        }
        
     public function getPublisherDetails ($objPublisherDetails){
         $arrRow = array();
         $arrTemp = array();
         $objPublisherLoginDao = new PublisherLoginDaoPDO();
         try{
        $conn = $this->getConnection();
        $saveQuery = "SELECT pub_username, pub_email FROM publisher_login";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":PUB_ID", $objPublisherDetails->getPubId());
        $q->bindParam(":PUB_USERNAME", $objPublisherDetails->getPubUsername());
        $q->bindParam(":PUB_EMAIL", $objPublisherDetails->getPubEmail());
        $q->bindParam(":PUB_PASSWORD", $objPublisherDetails->getPubPassword());
         //$objPublisherDetails->getRegistrationTimestamp());
         $q->execute();
         while($arrDetail = $q->fetch(PDO::FETCH_ASSOC))
           {
            $arrRow = $arrDetail['pub_username'];
            $arrTemp = $arrDetail['pub_email'];
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

