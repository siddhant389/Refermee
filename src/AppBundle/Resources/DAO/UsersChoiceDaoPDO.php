<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersChoiceDaoPDO
 *
 * @author surbhi
 */
class UsersChoiceDaoPDO {
    //put your code here
     public function GetDbTag(){
       return $this->DbTag;
    }
    
    public function SaveIntoUsersChoice($objUsersChoice) {
        $query = "INSERT INTO users_choice(user_id, book_id) values(:USER_ID, :BOOK_ID)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':USER_ID', $objBookAuthor->getUserId());
            $stmt->bindValue(':BOOK_ID', $objBookAuthor->getBookId());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
}
}
