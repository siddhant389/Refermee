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
    private $user_id = '';
    private $user_info_id = '';
    private $name = '';
    private $location = '';
    private $age = '';
    private $sex = '';
    private $contact = '';
    private $username = '';
    private $email = '';
    private $password = '';
    private $specification = '';
    private $profession = '';
    private $organisation = '';
    private $specification_id = '';
    private $specification_name = '';
    private $course_id = '';
    private $course_name = '';
    private $institute_id = '';
    private $institute_name = '';
    private $year_of_completion = '';
    private $registration_timestamp = '';


    public function __construct() {
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
        $this->username = $username;
    }
    public function setUserId($user_id) {
        $this->user_id = $user_id;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setInstituteName($institute_name) {
        $this->institute_name = $institute_name;
    }
    public function setInstituteId($institute_id) {
        $this->institute_id = $institute_id;
    }
    public function setYearOfCompletion($year_of_completion) {
        $this->year_of_completion = $year_of_completion;
    }
    public function setCourseId($course_id) {
        $this->course_id = $course_id;
    }
    public function setCourseName($course_name) {
        $this->course_name = $course_name;
    }
    public function setSpecificationId($specification_id) {
        $this->specification_id = $specification_id;
    }
    public function setSpecificationName($specification_name) {
        $this->specification_name = $specification_name;
    }
    public function setOrganisation($organisation) {
        $this->organisation = $organisation;
    }
    public function setProfession($profession) {
        $this->profession = $profession;
    }
    public function setSpecification($specification) {
        $this->specification = $specification;
    }
    public function setRegistrationTimestamp($registration_timestamp) {
        $this->registration_timestamp = $registration_timestamp;
    }
    public function setContact($contact) {
        $this->contact = $contact;
    }
    public function getContact() {
        return $this->contact;
    }
    
    public static function setLoginCredentials($objUser){
       $objUserDetails = new UserDetails();
       if($objUser->getUserId() != NULL){
       $objUserDetails->setUserId($objUser->user_id);
       $objUserDetails->setUsername($objUser->username);
       $objUserDetails->setPassword($obj->password);
       $objUserDetails->setEmail($objUser->email);
       }
        else {
           echo 'user not found';
       }
    }
    public static function setUserDashboardForRegUser($objUser){
        $objUserDetails = new UserDetails();
        if($objUser->getUserId() != NULL){
            $objUserDetails->setUserId($objUser->user_id);
            $objUserDetails->setUserName($objUser->username);
            $objUserDetails->setPassword($objUser->password);
            $objUserDetails->setEmail($objUser->email);
            $objUserDetails->setInstituteName($objUser->institute_name);
            $objUserDetails->setInstituteId($objUser->institute_id);
            $objUserDetails->setYearOfCompletion($objUser->year_of_completion);
            $objUserDetails->setCourseId($objUser->course_id);
            $objUserDetails->setCourseName($objUser->course_name);
            $objUserDetails->setSpecificationId($objUser->specification_id);
            $objUserDetails->setSpecificationName($objUser->specification_name);
            $objUserDetails->setOrganisation($objUser->organisation);
            $objUserDetails->setSpecification($objUser->specification);
            $objUserDetails->setProfession($objUser->profession);
            $objUserDetails->setContact($objUser->contact);
            $objUserDetails->setRegistrationTimestamp($objUser->registration_timestamp);
            
        }
        else{
            echo "user not registered";
        }
        
        
    }
   
}
