<?php

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
class PublisherLoginDaoPDO extends BaseDaoPDO {
    //put your code here
     public function GetDbTag(){
       return $this->DbTag;
    }
    public function SaveIntoPublisherLogin($objPublisherLogin) {
        try{
        $conn = $this->getConnection();
        $saveQuery = "INSERT INTO publisher_login(pub_id, pub_username, pub_email, pub_password) VALUES (:PUB_ID, :PUB_USERNAME, :PUB_EMAIL, :PUB_PASSWORD)";
        $q = $conn->prepare($saveQuery);
        $q->bindParam(":PUB_ID", $objPublisherLogin->getPubId());
        $q->bindParam(":PUB_USERNAME", $objPublisherLogin->getPubUsername());
        $q->bindParam(":PUB_EMAIL", $objPublisherLogin->getPubEmail());
        $q->bindParam(":PUB_PASSWORD", $objPublisherLogin->getPubPassword());
        
        $q->execute();
        } catch (\Exception $e) {
                $this->throwPDOException($e);
        
        }
    
}
}
