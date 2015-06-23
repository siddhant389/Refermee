<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PpuInfoDaoPDO
 *
 * @author surbhi
 */
class PpuInfoDaoPDO {
    //put your code here
    public function SaveIntoPpuInfo($objPpuInfo) {
        $query = "INSERT INTO ppu_info(ppu_trans_id, user_id, ppu_timestamp, ppu_type_id, book_id) values(:PPU_TRANS_ID, :USER_ID, :PPU_TIMESTAMP, :PPU_TYPE_ID, :BOOK_ID)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':PPU_TRANS_ID', $objCourse->getPpuTransId());
            $stmt->bindValue(':USER_ID', $objCourse->getUserId());
            $stmt->bindValue(':PPU_TIMESTAMP', $objCourse->getPpuTimestamp());
            $stmt->bindValue(':PPU_TYPE_ID', $objCourse->getPpuTypeId());
            $stmt->bindValue(':BOOK_ID', $objCourse->getBookId());
            
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
    }
}
