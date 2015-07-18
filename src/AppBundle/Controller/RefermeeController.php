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

    
    private $objNotLoggedInHomePageManager;
    
    private $objLoggedInHomePageManager;
    
    
       /**
   * @DI\Inject("mongo.manager")
   */
    private $mongoManager;
    
    
    
     /**
     * @config\Route("/mongo") 
     */
     public function testMongo() {
         echo "mongo is here";
         $arrParams = array();
         $arrParams['title'] = "refermee";
         $arrParams['description'] = "database mongo";
         $arrParams['likes'] = 100;
         $arrParams['url'] = "http://www.tutorialspoint.com/mongodb/"; 
         $myvalue = $this->mongoManager->insertDocumentIntoMongo($arrParams);
         echo $myvalue;
         return new Response();
     }
    
    
    
     /**
     * @config\Route("/homepage") 
     */
      
    public function displayHomePage() {
        $arrParams = $this->getInitialParams();  
        $isAuthenticated = $this->isAuthenticated();
        
        if($isAuthenticated) {
            $objResult = $this->objLoggedInHomePageManager->displayPageContent();
        }else {
            $objResult = $this->objNotLoggedInHomePageManager->displayPageContent();
        }
        
       return new Response($objResult->getContent()); 
                
    }
    
    /**
     * @config\Route("/encrypt") 
     */
    
    public function encryption(){
        $password  = "kittu";
        $crypto = \EncryptionManager::encryptString("hi surbhi", $password);
        print_r($crypto); 
        $decrypto = \EncryptionManager::decryptString($crypto, $password);
        echo "\r\n";
        print_r($decrypto);
        return new Response();
    }
    
    /**
     * @config\Route("/decrypt") 
     */
    
    public function decryption() {
      
    }
    
    
    /**
     * @config\Route("/fb") 
     */
    
    public function fb() {
        $arr =  array();
        
      $fb = \FacebookManager::saveLoginDetails($arr);
      print_r($fb);
      return new Response();
    }
    
    
     /**
     * @config\Route("/signup") 
     */
    public function displaySignUpWidget() {
        
        
    }
    
    /**
     * @config\Route("/search") 
     */
    public function displaySearchResultPage() {
        
    }
    
    /**
     * @config\Route("/catalog") 
     */
    
    public function displayCatalogPage() {
        
    }
    
    /**
     * @config\Route("/recommendation") 
     */
    public function displayRecommendationPage() {
        
    }
    
    /**
     * @config\Route("/dashboard") 
     */
    public function displayUserDashboardPage() {
       $arr = array();
       $arr['username'] = "kammmo";
       $arr['email'] = "charuroy287659@gmail.com";
       $arr['name']= "charu"; 
       $arr['location']= "bangalore";
       $arr['sex']= "F";
       $arr['contact']= "8742025053";
       $objUserDetails = new UserDetails($arr);
       $myvalue = $this->userDashboardManager->saveLoginDetails($objUserDetails);
       $myvalue1 = $this->userDashboardManager->showUserDetails($objUserDetails);
       echo $myvalue1;
       return new Response();  
    }
    
    /**
     * @config\Route("/account") 
     */
    public function displayAccountSettingPage() {
        
    }
    
    /**
     * @config\Route("/payment") 
     */
    public function displayPaymentPage() {
        
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
