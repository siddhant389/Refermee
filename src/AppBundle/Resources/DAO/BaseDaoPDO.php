<?php
namespace AppBundle\Resources\DAO;

use JMS\DiExtraBundle\Annotation as DI;
use PDO;
use ThirdParty\DbFramework\db;
/*
 * To change this template, choose Tools | Templates
* and open the template in the editor.
*/

/**
 * Description of BaseDaoPDO
 *
 *
 */
/**
 * @DI\Service("base.dao", public=true, abstract=true)
 */
abstract class BaseDaoPDO {


	public abstract function getDbTag();

	/**
	 * Gets a sharded DB connection based on the client id and the db tag (wrt the dao)
	 * @param type $clientId
	 * @return PDO connection
	*/
	public function getConnection() {
         $dbh = new PDO('mysql:host=localhost;port=3306;dbname=Refermee', "root", "itsme");
         return $dbh;
	//return \ReferDatabaseManager::getInstance()->getDatabase($this->getDbTag())->getConnection();
	}


  public function throwPDOException($e) {
    throw new \Exception($e);
		//print_r($e);
	}

}

?>
