<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PublisherInfoDaoPDO
 *
 * @author surbhi
 */
class PublisherInfoDaoPDO {
    //put your code here
    
     public function GetDbTag(){
       return $this->DbTag;
    }
    
    public function SaveIntoPublisherInfo($objPublisherInfo) {
        $query = "INSERT INTO publisher_info(pub_id, organisation_name, address, city, pincode) values(:PUB_ID, :ORGANISATION_NAME, :ADDRESS, :CITY, :PINCODE)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':PUB_ID', $objPublisherInfo->getPubId());
            $stmt->bindValue(':ORGANISATION_NAME', $objPublisherInfo->getOrganisationName());
            $stmt->bindValue(':ADDRESS', $objPublisherInfo>getAddress());
            $stmt->bindValue(':CITY', $objPublisherInfo->getCity());
            $stmt->bindValue(':PINCODE', $objPublisherInfo->getPincode());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
}
}
