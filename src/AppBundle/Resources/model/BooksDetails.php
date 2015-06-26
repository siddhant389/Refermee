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
        $this->book_id = $book_id;
    }
    public function setBookName($book_name) {
        $this->book_name = $book_name;
    }
    public function setIsbnNo($isbn_no) {
        $this->isbn_no = $isbn_no;
    }
    public function setNoOfPages($no_of_pages) {
        $this->no_of_pages = $no_of_pages;
    }
    public function setPhysicalPrice($physical_copy_price) {
        $this->physical_copy_price = $physical_copy_price;
    }
    public function setDigitalPrice($digital_copy_price) {
        $this->digital_copy_price = $digital_copy_price;
    }
    public function setCatagoryId($catagory_id) {
        $this->catagory_id = $catagory_id;
    }
    public function setCatagoryName($username) {
        $this->catagory_name = $catagory_name;
    }
    public function setLft($lft) {
        $this->lft = $lft;
    }
    public function setRgt($rgt) {
        $this->rgt = $rgt;
    }
    public function setInventoryLink($inventory_link) {
        $this->inventory_link = $inventory_link;
    }
    public function setAuthorId($author_id) {
        $this->author_id = $author_id;
    }
    public function setAuthorName($author_name) {
        $this->author_name = $author_name;
    }
    public function setGenereName($genere_name) {
        $this->genere_name = $genere_name;
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
