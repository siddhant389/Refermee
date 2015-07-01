<?php
namespace AppBundle\Resources\model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Publisher
 *
 * @author surbhi
 */
class PublisherDetails {
    //put your code here
    
    private $arrPublisherDetails = array();


    private $pub_id = '';
    private $pub_username = '';
    private $pub_email = '';
    private $pub_password = '';
    private $address = '';
    private $city = '';
    private $pincode = '';
    private $organisation_name = '';
    
    
    
     public function __construct($arr = array()) {
        foreach ($arr as $key => $value) {
            $this->$key = $value;
                            
        }
    
     }
    
    public function getPubId(){
        return $this->pub_id;
    }
    public function getPubUsername(){
        return $this->pub_username;
    }
    public function getPubEmail(){
        return $this->pub_email;
    }
    public function getPubPassword(){
        return $this->pub_password;
    }
    public function getAddress(){
        return $this->address;
    }
    public function getCity(){
        return $this->city;
    }
    public function getPincode(){
        return $this->pincode;
    }
    public function getOrganisationName(){
        return $this->organisation_name;
    }
    public function setPubId($pub_id) {
        $this->arrPublisherDetails[Constants::PUB_ID] = $pub_id;
    }
     public function setPubUsername($pub_username) {
        $this->arrPublisherDetails[Constants::PUB_USERNAME] = $pub_username;
    }
     public function setPassword($password) {
        $this->arrPublisherDetails[Constants::PUB_PASSWORD] = $password;
    }
     public function setPubEmail($pub_email) {
        $this->arrPublisherDetails[Constants::PUB_EMAIL] = $pub_email;
    }
     public function setAddress($address) {
        $this->arrPublisherDetails[Constants::ADDRESS] = $address;
    }
     public function setOrganisationName($organisation_name) {
        $this->arrPublisherDetails[Constants::ORGANISATION_NAME] = $organisation_name;
    }
     public function setCity($city) {
        $this->arrPublisherDetails[Constants::CITY] = $city;
    }
     public function setPincode($pincode) {
        $this->arrPublisherDetails[Constants::PINCODE] = $pincode;
    }
    public static function setPublisherDashboardForRegPublisher($objPublisher){
        $objPublisherDetails = new PublisherDetails();
        if($objPublisher->getPublisherId() != NULL){
            $objPublisherDetails->setPubId($objPublisher->pub_id);
            $objPublisherDetails->setPubUsername($objPublisher->pub_username);
            $objPublisherDetails->setPassword($objPublisher->pub_password);
            $objPublisherDetails->setEmail($objPublisher->pub_email);
            $objPublisherDetails->setAddress($objPublisher->address);
            $objPublisherDetails->setOrganisationName($objPublisher->organisation_name);
            $objPublisherDetails->setCity($objPublisher->city);
            $objPublisherDetails->setPincode($objPublisher->pincode);
           
            
        }
        else{
            echo "publisher not registered";
        }
        
    }
}
