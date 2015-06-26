<?php
namespace AppBundle\Services;
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
class UserDashboardManager {
   
   /** @DI\Inject("userLogin.dao") */
  public $objUserLoginDao;
    
  /** @DI\Inject("userInfo.dao") */
  public $objUserInfoDao;
  
  /** @DI\Inject("profession.dao") */
  public $objProfessionDao;
  
  /** @DI\Inject("education.dao") */
  public $objEducationDao;
   
   /** @DI\Inject("catalog.dao") */
  public $objCatalogDao;
    
  
        
    }
    //public function  ($param); 
        
    

