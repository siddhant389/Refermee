<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration as config;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\DiExtraBundle\Annotation as DI;




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
     * @config\Route("/homepage") 
     */
    public function displayHomePage() {
        
        return new Response("Hi!!....testing authentication.");
    }
    /**
     * @config\Route("/catalog") 
     */
    public function displayCatalogPage() {
       
        
    }
    
    /**
     * @config\Route("/description") 
     */
    public function displayBookDetailsPage() {
        
    }
    
    /**
     * @config\Route("/recommendation") 
     */
    public function displayRecommendationPage() {
        
    }
    
    
//put your code here
}
