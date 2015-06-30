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
 * Description of UserManager
 *
 * @author surbhi
 */


/**
 * @DI\Service("userDashboard.manager")
 */

class UserDashboardManager {
   
   /** @DI\Inject("userLogin.dao") */
  public $objUserLoginDao;
   
  /** @DI\Inject("userInfo.dao") */
  public $objUserInfoDao;
  
  /** @DI\Inject("profession.dao") */
  public $objProfessionDao;
  
  /** @DI\Inject("education.dao") */
  public $objEducationDao;
   
   /** @DI\Inject("catagory.dao") */
  public $objCatagoryDao;
    
   public function runDao($objUser){
       $result = $this->objUserLoginDao->saveIntoUserLogin($objUser);
        echo $result;
    }
    
        
    }
    //public function  ($param); 
        
    

