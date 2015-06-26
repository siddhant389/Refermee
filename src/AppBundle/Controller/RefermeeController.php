<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as config;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\DiExtraBundle\Annotation as DI;
use AppBundle\Resources\DAO\UserLoginDaoPDO;
use AppBundle\Resources\model\UserDetails;




/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RefermeeController
 *
 * @author surbhi
 */

/**
 * @config\Route("/home")
 * */

class RefermeeController extends Controller {

    
   /**
     * @config\Route("/page") 
     */
    
    public function displayPage() {
        
    $arr = array("surbhi@gmail.com", "surbhi", "phone");
    $objUserDO = new UserDetails($arr);
        echo "heloo nishant";
        
    }
//put your code here
}
