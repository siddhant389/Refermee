<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasicMongoDAO
 *
 * @author surbhi
 */
class BasicMongoDAO {
    //put your code here
    public function construct($servers = array())
        {
                global $mongoServers;
                
                // get server configs from global config or arguments
                $this->_config['servers'] = $servers ? $servers : $mongoServers;
        }
        
    public function connectToMongo() {
        // connect to mongodb
        $m = new MongoClient();
        echo "Connection to database successfully";
        return $m;
    }
    
    public function createCollection () {
        $m = new db.createCollection();
    }
}