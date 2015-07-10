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
 * Description of MongoManager
 *
 * @author surbhi
 */


/**
 * @DI\Service("mongo.manager")
 */

class MongoManager {
    //put your code here
    
     /** @DI\Inject("mongo.dao") */
  public $objMongoDao;
  
  public function insertDocumentIntoMongo($arrMongo) {
      $result = $this->objMongoDao->insertDocument($arrMongo);
      return $result;
  }
}
