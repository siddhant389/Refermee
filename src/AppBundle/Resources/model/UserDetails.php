<?php

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
    private $username = '';
    private $email = '';
    private $password = '';
    private $specification = '';
    private $profession = '';
    private $organisation = '';
    private $specificationId = '';
    private $specificationName = '';
    private $courseId = '';
    private $courseName = '';
    private $instituteId = '';
    private $instituteName = '';
    private $yearOfCompletion = '';
    
    public function __construct() {
        $this->objUserDO = $objUserDO; 
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
        return $this->specificationId;
    }
    public function getSpecificationName() {
        return $this->specificationName;
    }
    public function getCourseId() {
        return $this->CourseId;
    }
    public function getCourseName() {
        return $this->courseName;
    }
    public function getInstituteId() {
        return $this->instituteId;
    }
    public function getInstituteName() {
        return $this->instituteName;
    }
    public function getYearOfCompletion() {
        return $this->yearOfCompletion;
    }
    public function setUserName($username) {
        $this->username = $username;
    }
    public function setPassword($password) {
        $this->password = $password;
    }
    public function setemail($email) {
        $this->email = $email;
    }
    
    public static function setLoginCredentials($arr){
       $this->username = getUserName($arr);
       $this->password = getPassword($arr);
       $this->email = getEmail($arr);
    }
    
}
