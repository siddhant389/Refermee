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
 * Description of CatagoryManager
 *
 * @author surbhi
 */

/**
 * @DI\Service("catalog.manager")
 */

class CatalogManager {
        
     /** @DI\Inject("catagory.dao") */
  public $objCatagoryDao;
 
  
  /** @DI\Inject("books.dao") */
  public $objBooksDao;
  
    public function showCatagory($objShowCatagory) {
        $resultCatagory = $this->objCatagoryDao->retrieveLeafNodes($objShowCatagory);
         echo $resultCatagory;
        
    }
}
