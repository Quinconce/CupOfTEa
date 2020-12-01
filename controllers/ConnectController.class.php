<?php

class ConnectController
{
   
    public function display()
    {
        
            //instance de mes class model pour les appeller dans les "phtml"
            
            
            
            
            
            $template ='connect.phtml';
            require 'views/layout.phtml';
    }    
    public function verify(){
        


            $utilisateurModel= new UtilisateursModel();
            $users= $utilisateurModel -> getUser();
            var_dump($users['mdp_ut']);

    if(!isset($_POST['mail'])){
    if($_POST['mail'] == $users['mail_ut']
    && 
    password_verify($_POST['verifpassword'],$users['mdp_ut'])){
        //connection l'utilisateur en utilisant une session
        //variables super globales
        var_dump('ca marche');
        $_SESSION['user']='user';
        $_SESSION['userId']=$users['id_ut'];
        //$_SESSION['etiquette']=valeur dont on a besoin plus tard
        
    }
    
    else{
         $error="Vous n'avez pas saisi les bons identifiants";
        var_dump("tu fais nimp");
        }
    }
    }
}
