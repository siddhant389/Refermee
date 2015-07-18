<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacebookUserDetails
 *
 * @author surbhi
 */
class FacebookUserDetails {
    //put your code here
     private $arrFuserDetails = array(); 
     
      public function __construct($arr = array()) {
        foreach ($arr as $key => $value) {
            $this->$key = $value;
                            
        }
    }
    
    public function getFuid(){
        return $this->Fuid;
    }
    public function getFname() {
        return $this->Fname;
    }
    public function getFemail() {
        return $this->Femail;
    }
    public function setFuid($fuid) {
        $this->arrFuserDetails[Constants::FUID] = $fuid;
    }
    public function setFname($fname) {
        $this->arrFuserDetails[Constants::FNAME] = $fname;
    }
    public function setFemail($femail) {
        $this->arrFuserDetails[Constants::FEMAIL] = $femail;
    }
}
    
