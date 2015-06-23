<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SubsInfoDaoPDO
 *
 * @author surbhi
 */
class SubsInfoDaoPDO {
    //put your code here
      public function GetDbTag(){
       return $this->DbTag;
    }
     public function SaveIntoSubsInfo($objSubsInfo) {
        $query = "INSERT INTO subs_info(subs_trans_id, user_id, subs_timestamp, subs_type_id) values(:SUBS_TRANS_ID, :USER_ID, :SUBS_TIMESTAMP, :SUBS_TYPE_ID)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':SUBS_TRANS_ID', $objCourse->getSubsTransId());
            $stmt->bindValue(':USER_ID', $objCourse->getUserId());
            $stmt->bindValue(':SUBS_TIMESTAMP', $objCourse->getSubsTimestamp());
            $stmt->bindValue(':SUBS_TYPE_ID', $objCourse->getSubsTypeId());
                        
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
    }
}
