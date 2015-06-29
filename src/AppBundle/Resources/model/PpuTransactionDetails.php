<?php
namespace AppBundle\Resources\model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PpuTransactionDetails
 *
 * @author surbhi
 */
class PpuTransactionDetails {
    //put your code here
     public function getPpuTransId(){
        return $this->ppu_trans_id;
    }
     public function getPpuTypeId(){
        return $this->ppu_type_id;
    }
     public function getPpuTimestamp(){
        return $this->ppu_timestamp;
    }
     public function getPpuType(){
        return $this->ppu_type;
    }
    
    public function setPpuTransId($ppu_trans_id) {
        $this->ppu_trans_id = $ppu_trans_id;
    }
    public function setPpuTypeId($ppu_type_id) {
        $this->ppu_type_id = $ppu_type_id;
    }
    public function setPpuTimestamp($ppu_trans_id) {
        $this->ppu_trans_id = $ppu_trans_id;
    }
    public function setPpuType($ppu_type) {
        $this->ppu_type = $ppu_type;
    }
   
     
    public static function setPpuTransactionDetails($objTrans) {
        
    }
}


