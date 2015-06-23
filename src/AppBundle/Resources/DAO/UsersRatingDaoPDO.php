<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsersRatingDaoPDO
 *
 * @author surbhi
 */
class UsersRatingDaoPDO {
    //put your code here
      public function GetDbTag(){
       return $this->DbTag;
    }
    
    public function SaveIntoUsersRating($objUsersRating) {
        $query = "INSERT INTO users_rating(users_rating_id, user_id, book_id, rating, timestamp) values(:USERS_RATING_ID, :USER_ID, :BOOK_ID, :RATING, :TIMESTAMP)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':USER_RATING_ID', $objUsersRating->getUserRatingId());
            $stmt->bindValue(':USER_ID', $objUsersRating->getUserId());
            $stmt->bindValue(':BOOK_ID', $objUsersRating->getBookId());
            $stmt->bindValue(':RATING', $objUsersRating->getRating());
            $stmt->bindValue(':TIMESTAMP', $objUsersRating->getTimestamp());
             
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
}
