<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FacebookManager
 *
 * @author surbhi
 */
class FacebookManager {
    //put your code here
     /** @DI\Inject("facebook.dao") */
  public $objFacebookDao;
    
   public function saveLoginDetails($objFb){
       $result = $this->objFacebookDao->saveIntoFacebookUsers($objFb);
        echo $result;
        echo "pipe";
    }
   
}
