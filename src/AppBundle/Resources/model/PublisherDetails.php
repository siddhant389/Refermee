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
    private $pub_id = '';
    private $pub_username = '';
    private $pub_email = '';
    private $pub_password = '';
    private $address = '';
    private $city = '';
    private $pincode = '';
    private $organisation_name = '';
    
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
        $this->pub_id = $pub_id;
    }
     public function setPubUsername($pub_username) {
        $this->pub_username = $pub_username;
    }
     public function setPassword($password) {
        $this->password = $password;
    }
     public function setPubEmail($pub_email) {
        $this->pub_email = $pub_email;
    }
     public function setAddress($address) {
        $this->address = $address;
    }
     public function setOrganisationName($organisation_name) {
        $this->organisation_name = $organisation_name;
    }
     public function setCity($city) {
        $this->city = $city;
    }
     public function setPincode($pincode) {
        $this->pincode = $pincode;
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
