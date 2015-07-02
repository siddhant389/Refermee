<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as config;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\DiExtraBundle\Annotation as DI;
use AppBundle\Resources\DAO\UserLoginDaoPDO;
use AppBundle\Resources\model\UserDetails;
use AppBundle\Resources\DAO\CatagoryDaoPDO;
use AppBundle\Resources\model\BooksDetails;
use AppBundle\Resources\model\PublisherDetails;
use AppBundle\Resources\model\Constants;
use AppBundle\Resources\DAO\PublisherLoginDaoPDO;






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
   * @DI\Inject("catalog.manager")
   */
    private $catalogManager;
    
   /**
   * @DI\Inject("publisherDashboard.manager")
   */
    private $publisherDashboardManager;
  
     /**
     * @config\Route("/homepage") 
     */
    public function displayPage() {
     
        echo "heloo nishant";   
    
    //$objUserInfo = 
    
        echo "  surbhi";
   
    echo "    surbhi123    "; 
    return new Response();
    }
    /**
     * @config\Route("/user") 
     */
    public function displayUserDashboard() {
       $arr = array();
       $arr['username'] = "kammmo";
       $arr['email'] = "charuroy287659@gmail.com";
       $arr['name']= "charu"; 
       $arr['location']= "bangalore";
       $arr['sex']= "F";
       $arr['contact']= "8742025053";
       $objUserDetails = new UserDetails($arr);
       $myvalue = $this->publisherDashboardManager->saveLoginDetails($objUserDetails);
       $myvalue1 = $this->publisherDashboardManager->showUserDetails($objUserDetails);
       echo $myvalue1;
       return new Response();
    }
    
    /**
     * @config\Route("/publisher") 
     */
    
    public function displayPublisherDashboard() {
       $arr = array();
       $arr['pub_username'] = "kammmo";
       $arr['pub_email'] = "charuroy29@gmail.com";
       $arr['organisation_name']= "bits"; 
       $arr['city']= "bangalore";
       $arr['address']= "hhjkkkk";
       $arr['pincode']= "8742025053";
       $objPublisherDetails = new PublisherDetails($arr);
       //print_r($objPublisherDetails->getPubId()."llll");die;
       $myvalue = $this->publisherDashboardManager->saveLoginDetails($objPublisherDetails);
       $myvalue1 = $this->publisherDashboardManager->showPublisherDetails($objPublisherDetails);
       echo $myvalue1;
       return new Response();
    }
     /**
     * @config\Route("/catalog") 
     */
    
    public function displayCatagory(){
    $arr = array();
    $arr['catagory_name'] = '';
    $arr['lft'] = '';
    $arr['rgt']= ''; 
    $objBooksDetails = new BooksDetails($arr);
    $mynewvalue = $this->catalogManager->showCatagory($objBooksDetails);
    echo $mynewvalue;
    return new Response();
    }
    
    
//put your code here
}
