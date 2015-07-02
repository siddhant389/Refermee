<?php
namespace AppBundle\Resources\DAO;
use JMS\DiExtraBundle\Annotation as DI;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BooksDaoPDO
 *
 * @author surbhi
 */

/**
 *  @DI\Service("books.dao")
 */
class BooksDaoPDO extends BaseDaoPDO {
    //put your code here
     public function getDbTag(){
       return $this->dbTag;
    }
    
    public function insertIntoBooks($objBooks){
          $query = "INSERT INTO books(book_id, pub_id, bookname, isbn_no, no_of_pages, physical_copy_price, digital_copy_price, catagory_id, inventory_link) values(:BOOK_ID, :PUB_ID, :BOOKNAME, :ISBN_NO, :NO_OF_PAGES, :PHYSICAL_COPY_PRICE, :DIGITAL_COPY_PRICE, :CATAGORY_ID, :INVENTORY_LINK)";
        try{
            $dbconn = $this->getConnection();
            $stmt = $dbconn->prepare($query);
            $stmt->bindValue(':BOOK_ID', $objBooks->getBookId());
            $stmt->bindValue(':PUB_ID', $objBooks->getPubId());
            $stmt->bindValue(':BOOKNAME', $objBooks->getBookName());
            $stmt->bindValue(':ISBN_NO', $objBooks->getIsbnNo());
            $stmt->bindValue(':NO_OF_PAGES', $objBooks->getNoOfPages());
            $stmt->bindValue(':PHYSICAL_COPY_PRICE', $objBooks->GetPhysicalPrice());
            $stmt->bindValue(':DIGITAL_COPY_PRICE', $objBooks->getDigitalPrice());
            $stmt->bindValue(':CATAGORY_ID', $objBooks->getCatagoryId());
            $stmt->bindValue(':Inventory_Link', $objBooks->getInventoryLink());
            $stmt->execute();
        } catch (Exception $ex) {
                $this->throwPDOException($e);
        }
    }
}
