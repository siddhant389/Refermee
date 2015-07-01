<?php
namespace AppBundle\Resources\model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Books
 *
 * @author surbhi
 */
class BooksDetails {
    //put your code here
    
    
    private $arrBookDetails = array();

    public function __construct($arr = array()) {
        foreach ($arr as $key => $value) {
            $this->$key = $value;
                            
        }
     }
        
     public function getBookId(){
        return $this->book_id;
    }
     public function getBookName(){
        return $this->book_name;
    }
     public function getIsbnNo(){
        return $this->isbn_no;
    }
     public function getNoOfPages(){
        return $this->no_of_pages;
    }
     public function getPhysicalPrice(){
        return $this->physical_copy_price;
    }
     public function getDigitalPrice(){
        return $this->digital_copy_price;
    }
     public function getCatagoryId(){
        return $this->catagory_id;
    }
    public function getCatagoryName(){
        return $this->catagory_name;
    }
    public function getLft(){
        return $this->lft;
    }
     public function getRgt(){
        return $this->rgt;
    }
     public function getInventoryLink(){
        return $this->inventory_link;
    }
     public function getAuthorId(){
        return $this->author_id;
    }
     public function getAuthorName(){
        return $this->author_name;
    }
    public function getGenereId(){
        return $this->genere_id;
    }
     public function getGenereName(){
        return $this->genere_name;
    }
    public function setBookId($book_id) {
        $this->arrBookDetails[Constants::BOOK_ID] = $book_id;
    }
    public function setBookName($book_name) {
        $this->arrBookDetails[Constants::BOOK_NAME] = $book_name;
    }
    public function setIsbnNo($isbn_no) {
        $this->arrBookDetails[Constants::ISBN_NO] = $isbn_no;
    }
    public function setNoOfPages($no_of_pages) {
        $this->arrBookDetails[Constants::NO_OF_PAGES] = $no_of_pages;
    }
    public function setPhysicalPrice($physical_copy_price) {
        $this->arrBookDetails[Constants::PHYSICAL_PRICE] = $physical_copy_price;
    }
    public function setDigitalPrice($digital_copy_price) {
        $this->arrBookDetails[Constants::DIGITAL_PRICE] = $digital_copy_price;
    }
    public function setCatagoryId($catagory_id) {
        $this->arrBookDetails[Constants::CATAGORY_ID] = $catagory_id;
    }
    public function setCatagoryName($username) {
        $this->arrBookDetails[Constants::CATAGORY_NAME] = $catagory_name;
    }
    public function setLft($lft) {
        $this->arrBookDetails[Constants::LFT] = $lft;
    }
    public function setRgt($rgt) {
        $this->arrBookDetails[Constants::RGT] = $rgt;
    }
    public function setInventoryLink($inventory_link) {
        $this->arrBookDetails[Constants::INVENTORY_LINK] = $inventory_link;
    }
    public function setAuthorId($author_id) {
        $this->arrBookDetails[Constants::AUTHOR_ID] = $author_id;
    }
    public function setAuthorName($author_name) {
        $this->arrBookDetails[Constants::AUTHOR_NAME] = $author_name;
    }
    public function setGenereName($genere_name) {
        $this->arrBookDetails[Constants::GENERE_NAME] = $genere_name;
    }
    public static function setBookInfo ($objBook) {
        $objBookDetails = new BookDetails();
        if($objBook->getBookId() != NULL){
            $objBookDetails->setBookId($objBook->book_id);
            $objBookDetails->setBookName($objBook->book_name);
            $objBookDetails->setIsbnNo($objbook->isbn_no);
            $objBookDetails->setNoOfPages($objBook->no_of_pages);
            $objBookDetails->setPhysicalPrice($objBook->physical_copy_price);
            $objBookDetails->setDigitalPrice($objBook->digital_copy_price);
            $objBookDetails->setCatagoryId($objBook->catagory_id);
            $objBookDetails->setCatagoryName($objBook->catagory_name);
            $objBookDetails->setLft($objBook->lft);
            $objBookDetails->setRgt($objBook->rgt);
            $objBookDetails->setInventoryLink($objBook->inventory_link);
            $objBookDetails->setAuthorId($objBook->author_id);
            $objBookDetails->setAuthorName($objBook->author_name);
            $objBookDetails->setGenereName($objBook->genere_name);
                  
        }
        else{
            echo "book not found";
        }
                      
    }
    public static function setCatalogDisplay ($objCatalog) {
            $objBookDetails = new BooksDetails();
            if($objCatalog->getCatagoryId() != NULL){
                $objBookDetails->setRecommendations($objCatalog->recommendations);
                
            }
        }
}
