<?php
namespace AppBundle\Controller\Form\Type;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\OptionsResolver\OptionsResolver;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RegistrationForm
 *
 * @author surbhi
 */
/**
 * @config\Route("/form")
 * */

Abstract class RegistrationForm extends AbstractType{
    
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder ->add('username');
        $builder ->add('password');
        echo "the form is here";
        parent::buildForm($builder, $options);
    }
    //put your code here
}
