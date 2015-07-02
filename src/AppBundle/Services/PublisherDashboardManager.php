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
 * Description of PublisherDashboardManager
 *
 * @author surbhi
 */

/**
 * @DI\Service("publisherDashboard.manager")
 */

class PublisherDashboardManager {
    //put your code here
    
    /** @DI\Inject("publisherLogin.dao") */
  public $objPublisherLoginDao;
    
  
  /** @DI\Inject("publisherInfo.dao") */
  public $objPublisherInfoDao;
  
  
     public function saveLoginDetails($objPublisher){
       $result = $this->objPublisherLoginDao->saveIntoPublisherLogin($objPublisher);
        echo $result;
    }
    
    public function showPublisherDetails($objPublisher) {
      $result = $this->objPublisherLoginDao->getPublisherDetails($objPublisher);
      echo $result;
    }
}
