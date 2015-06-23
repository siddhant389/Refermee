<?php

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
    
}
