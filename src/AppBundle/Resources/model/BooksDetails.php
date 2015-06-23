<?php

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
     public function getInventoryLink(){
        return $this->inventory_link;
    }
     public function getAuthorId(){
        return $this->author_id;
    }
     public function getAuthorName(){
        return $this->author_name;
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
     public function getGenereId(){
        return $this->genere_id;
    }
     public function getGenereName(){
        return $this->genere_name;
    }
    
    
}
