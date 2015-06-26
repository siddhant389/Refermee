<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Transaction
 *
 * @author surbhi
 */
class TransactionDetails {
    //put your code here
     public function getPpuTransId(){
        return $this->ppu_trans_id;
    }
     public function getPpuTypeId(){
        return $this->ppu_type_id;
    }
     public function getPpuTimestamp(){
        return $this->timestamp;
    }
     public function getPpuType(){
        return $this->type;
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
    
}
