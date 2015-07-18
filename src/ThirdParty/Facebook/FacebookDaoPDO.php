<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacebookDaoPDO
 *
 * @author surbhi
 */
class FacebookDaoPDO {
    //put your code here
     public function saveIntoFacebookUsers($objFacebook){
        echo "jhuytvjk";
         $query = "INSERT INTO Users (Fuid,Ffname,Femail) VALUES (:FUID, :FUNAME, FEMAIL)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':FUID', $objFacebook->getFuid());
            $stmt->bindValue(':FNAME', $objFacebook->getFname());
            $stmt->bindValue(':FEMAIL', $objFacebook->getFemail());
            
             
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
    }}
