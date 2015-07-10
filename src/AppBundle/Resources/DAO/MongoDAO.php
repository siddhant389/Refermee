<?php
namespace AppBundle\Resources\DAO;

use JMS\DiExtraBundle\Annotation as DI;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MongoDAO
 *
 * @author surbhi
 */

/**
 *  @DI\Service("mongo.dao")
 */

class MongoDAO {
    public function insertDocument($param) {
            $m = new \MongoClient();
            $db = $m->newdb;
            $collection = $db->mycol;
            $document = array( 
                    "title" => $param['title'], 
                    "description" => $param['description'],
                    "likes" => $param['likes'],
                    "url" => $param['url'], //"http://www.tutorialspoint.com/mongodb/",
                    "by", "tutorials point"
                    );
            $collection->insert($document);
   }
}