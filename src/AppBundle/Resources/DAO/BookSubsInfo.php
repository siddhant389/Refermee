<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BookSubsInfo
 *
 * @author surbhi
 */
class BookSubsInfo {
    //put your code here
    
     public function GetDbTag(){
       return $this->DbTag;
    }
    
    public function SaveIntoBookSubsInfo($objBookSubsInfo) {
        $query = "INSERT INTO book_subs_info(book_id, subs_trans_id) values(:BOOK_ID, :SUBS_TRANS_ID)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':BOOK_ID', $objPpuType->getBookId());
            $stmt->bindValue(':SUBS_TRANS_ID', $objPpuType->getSubsTrans());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
}
