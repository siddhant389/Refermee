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
        $this->subs_trans_id = $subs_trans_id;
    }
     public function setSubsTypeId($subs_type_id) {
        $this->subs_type_id = $subs_type_id;
    }
     public function setSubsTimestamp($subs_timestamp) {
        $this->subs_timestamp = $subs_timestamp;
    }
    public static function setSubsTransactionDetails($objTrans){
        $objSubsTransactionDetails = new SubsTransactionDetails();
        
    }
}
