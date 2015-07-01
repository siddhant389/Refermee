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
    
    private $arrPpuTransaction;


    public function __construct($arr = array()) {
        foreach ($arr as $key => $value) {
            $this->$key = $value;
                            
        }
     }
    
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
        $this->arrPpuTransaction[Constants::PPU_TRANS_ID] = $ppu_trans_id;
    }
    public function setPpuTypeId($ppu_type_id) {
        $this->arrPpuTransaction[Constants::PPU_TYPE_ID] = $ppu_type_id;
    }
    public function setPpuTimestamp($ppu_trans_id) {
        $this->arrPpuTransaction[Constants::PPU_TIMESTAMP] = $ppu_timestamp;
    }
    public function setPpuType($ppu_type) {
        $this->arrPpuTransaction[Constants::PPU_TYPE] = $ppu_type;
    }
   
     
    public static function setPpuTransactionDetails($objTrans) {
        
    }
}


