<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BookAuthorDaoPDO
 *
 * @author surbhi
 */
class BookAuthorDaoPDO {
    //put your code here
     public function GetDbTag(){
       return $this->DbTag;
    }
    
    public function SaveIntoBookAuthor($objBookAuthor) {
        $query = "INSERT INTO book_author(book_id, author_id) values(:BOOK_ID, :AUTHOR_ID)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':BOOK_ID', $objBookAuthor->getBookId());
            $stmt->bindValue(':AUTHOR_ID', $objBookAuthor->getAuthorId());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
}
}