<?php

class RegisterController
{
   
    public function display()
    {
        
            //instance de mes class model pour les appeller dans les "phtml"
            
            
            
            
            
            $template ='register.phtml';
            require 'views/layout.phtml';
    }    
    
    public function newUser(){
        if(!empty($_POST)){
              
        
        $date = $_POST['birthdate'];;
        $firstName= $_POST['firstname'];
        $name = $_POST['name'];
        $tel = $_POST['phone'];
        $adress = $_POST['adress'];
        $postal = $_POST['zipcode'];
        $city= $_POST['city'];
        $mail = $_POST['email'];
        $password = password_hash($_POST['pass'],PASSWORD_DEFAULT);
       
        
         $well= new UtilisateursModel();
        $well->registerUser($name,$firstName,$mail,$adress,$tel,$date,$password,$city,$postal);
        }
    }
}