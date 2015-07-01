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
   * @DI\Inject("userDashboard.manager")
   */
    private $userDashboardManager;
    
   /**
     * @config\Route("/page") 
     */
    
    public function displayPage() {
     
        echo "heloo nishant";   
    $arr = array();
    $arr['email'] = "siddhant389@gmail.com";
    $arr['username'] = "siddhant";
    $arr['password']= "phone";
    $objUserDetails = UserDetails::setLoginCredentials($arr);
        echo "   heloo nishant 2 ";
        $myvalue = $this->userDashboardManager->runDao($objUserDetails);
       
        echo $myvalue;
        return new Response();
        
    }
//put your code here
}
