<?php
namespace AppBundle\Resources\model;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author surbhi
 */
class UserDetails {
    //put your code here
    
    
    private $arrUserDetails = array();  


    /** @var Integer */
    private $user_id = '';
    
    /** @var Integer */
    private $user_info_id = '';
    
    /** @var String */
    private $name = '';
    
    /** @var String */
    private $location = '';
    
    /** @var Integer */
    private $age = '';
    
    /** @var Enum */
    private $sex = '';
    
    /** @var String */
    private $contact = '';
    
    /** @var String */
    private $username = '';
    
    /** @var String */
    private $email = '';
    
    /** @var String */
    private $password = '';
    
    /** @var String */
    private $specification = '';
    
     /** @var String */
    private $profession = '';
    
     /** @var String */
    private $organisation = '';
    
     /** @var String */
    private $specification_id = '';
    
     /** @var String */
    private $specification_name = '';
    
     /** @var String */
    private $course_id = '';
    
     /** @var String */
    private $course_name = '';
    
     /** @var String */
    private $institute_id = '';
    
     /** @var String */
    private $institute_name = '';
    
     /** @var Integer */
    private $year_of_completion = '';
    
     /** @var timestamp */
    private $registration_timestamp = '';
    
    
    public function __construct($arr = array()) {
        foreach ($arr as $key => $value) {
            $this->$key = $value;
                            
        }
    }
    
    public function getUserId(){
        return $this->user_id;
    }
    public function getUserInfoId() {
        return $this->user_info_id;
    }
    public function getName() {
        return $this->name;
    }
    public function getLocation() {
        return $this->location;
    }
    public function getAge() {
        return $this->age;
    }
    public function getSex() {
        return $this->sex;
    }
    public function getUsername() {
        return $this->username;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getPassword() {
        return $this->password;
    }
    public function getSpecification() {
        return $this->specification;
    }
    public function getProfession() {
        return $this->profession;
    }
    public function getOrganisation() {
        return $this->organisation;
    }
    public function getSpecificationId() {
        return $this->specification_id;
    }
    public function getSpecificationName() {
        return $this->specification_name;
    }
    public function getCourseId() {
        return $this->Course_id;
    }
    public function getCourseName() {
        return $this->course_name;
    }
    public function getInstituteId() {
        return $this->institute_id;
    }
    public function getInstituteName() {
        return $this->institute_name;
    }
    public function getYearOfCompletion() {
        return $this->year_of_completion;
    }
    public function getRegistrationTimestamp() {
        return $this->registration_timestamp;
    }
    public function setUsername($username) {
        $this->arrUserDetails[Constants::USERNAME] = $username;
    }
    public function setUserId($user_id) {
        $this->arrUserDetails[Constants::USER_ID]= $user_id;
    }
    public function setPassword($password) {
        $this->arrUserDetails[Constants::PASSWORD] = $password;
    }
    public function setEmail($email) {
        $this->arrUserDetails[Constants::EMAIL] = $email;
    }
    public function setInstituteName($institute_name) {
        $this->arrUserDetails[Constants::INSTITUTE_NAME] = $institute_name;
    }
    public function setInstituteId($institute_id) {
        $this->arrUserDetails[Constants::INSTITUTE_ID] = $institute_id;
    }
    public function setYearOfCompletion($year_of_completion) {
        $this->arrUserDetails[Constants::YEAR_OF_COMPLETION] = $year_of_completion;
    }
    public function setCourseId($course_id) {
        $this->arrUserDetails[Constants::COURSE_ID] = $course_id;
    }
    public function setCourseName($course_name) {
        $this->arrUserDetails[Constants::COURSE_NAME] = $course_name;
    }
    public function setSpecificationId($specification_id) {
        $this->arrUserDetails[Constants::SPECIFICATION_ID] = $specification_id;
    }
    public function setSpecificationName($specification_name) {
        $this->arrUserDetails[Constants::SPECIFICATION_NAME] = $specification_name;
    }
    public function setOrganisation($organisation) {
        $this->arrUserDetails[Constants::ORGANISATION] = $organisation;
    }
    public function setProfession($profession) {
        $this->arrUserDetails[Constants::PROFESSION] = $profession;
    }
    public function setSpecification($specification) {
        $this->arrUserDetails[Constants::SPECIFICATION] = $specification;
    }
    public function setRegistrationTimestamp($registration_timestamp) {
        $this->arrUserDetails[Constants::REGISTRATION_TIMESTAMP] = $registration_timestamp;
    }
    public function setContact($contact) {
        $this->arrUserDetails[Constants::CONTACT] = $contact;
    }
    public function getContact() {
        return $this->contact;
    }
    
   
    public static function setLoginCredentials($objUserInfo){
       $objUserDetails = new UserDetails();
       $objUserDetails->setUserId('');
       $objUserDetails->setUsername($objUserInfo->username);
       $objUserDetails->setPassword($objUserInfo->password);
       $objUserDetails->setEmail($objUserInfo->email);
       return $objUserDetails;
    }
    public static function setProfessionalDetails($objProfession){
        $objUserDetails = new UserDetails();
        if($objProfession->getUserId() != NULL){
            
            $objUserDetails->setOrganisation($objProfession->arrUserDetails[Constants::ORGANISATION]);
            $objUserDetails->setSpecification($objProfession->arrUserDetails[Constants::SPECIFICATION]);
            $objUserDetails->setProfession($objProfession->arrUserDetails[Constants::PROFESSION]);
            $objUserDetails->setContact($objProfession->arrUserDetails[Constants::CONTACT]);
        }
    }
    public function setEducationalDetails($arrEducation) {
        $objUserDetails = new UserDetails();
        if($objUser->getUserId() != NULL){
            $objUserDetails->setInstituteName($arrEducation['institute_name']);
            $objUserDetails->setInstituteId($objUser->institute_id);
            $objUserDetails->setYearOfCompletion($objUser->year_of_completion);
            $objUserDetails->setCourseId($objUser->course_id);
            $objUserDetails->setCourseName($objUser->course_name);
            $objUserDetails->setSpecificationId($objUser->specification_id);
            $objUserDetails->setSpecificationName($objUser->specification_name);
    }
    }
}
