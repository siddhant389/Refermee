<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

public class authorDaoPDO{
     public function GetDbTag(){
       return $this->DbTag;
    }
    
    public function SaveIntoAuthor($objAuthor) {
        $query = "INSERT INTO author(author_id, author_name) values(:AUTHOR_ID, :AUTHOR_NAME)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':AUTHOR_ID', $objAuthor->getAuthorId());
            $stmt->bindValue(':AUTHOR_NAME', $objAuthor->getAuthorName());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
}
}