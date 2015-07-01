<?php
namespace AppBundle\Resources\model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SubsTransactionDetails
 *
 * @author surbhi
 */
class SubsTransactionDetails {
    //put your code here
    
    private $arrSubsTransactionDetails =  array();
    
    
     public function __construct($arr = array()) {
        foreach ($arr as $key => $value) {
            $this->$key = $value;
                            
        }
     }
    
    
     public function getSubsTransId(){
        return $this->subs_trans_id;
    }
     public function getSubsTypeId(){
        return $this->subs_type_id;
    }
     public function getSubsTimestamp(){
        return $this->subs_timestamp;
    }
     public function setSubsTransId($subs_trans_id) {
        $this->arrSubsTransactionDetails[Constants::SUBS_TRANS_ID] = $subs_trans_id;
    }
     public function setSubsTypeId($subs_type_id) {
        $this->arrSubsTransactionDetails[Constants::SUBS_TYPE_ID] = $subs_type_id;
    }
     public function setSubsTimestamp($subs_timestamp) {
        $this->arrSubsTransactionDetails[Constants::SUBS_TIMESTAMP] = $subs_timestamp;
    }


}
