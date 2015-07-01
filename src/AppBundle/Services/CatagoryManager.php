<?php

namespace AppBundle\Services;

use JMS\DiExtraBundle\Annotation as DI;

use Symfony\Component\Validator\Constraints\False;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CatalogManager
 *
 * @author surbhi
 */

/**
 * @DI\Service("catagory.manager")
 */



class CatagoryManager {
    //put your code here\
     /** @DI\Inject("catagory.dao") */
  public $objCatagoryDao;
  
  /** @DI\Inject("books.dao") */
  public $objBooksDao;
  
   /** @DI\Inject("userLogin.dao") */
  public $objUserLoginDao;
    
    public function showCatagory($objShowCatagory) {
        $resultCatagory = $this->objCatagoryDao->retrieveLeafNodes($objShowCatagory);
        return $resultCatagory;
        
    }
}
