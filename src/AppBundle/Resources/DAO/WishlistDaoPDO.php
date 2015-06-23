<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of WishlistDaoPDO
 *
 * @author surbhi
 */
class WishlistDaoPDO {
    //put your code here
    
     public function GetDbTag(){
       return $this->DbTag;
    }
    
    public function SaveIntoWishlist($objWishlist) {
        $query = "INSERT INTO wishlist(user_id, wishfor) values(:USER_ID, :WISHFOR)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':USER_ID', $objWishlist->getUserId());
            $stmt->bindValue(':WISHFOR', $objWishlist->getWishforList());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
}
}
