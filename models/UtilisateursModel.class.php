<?php

class UtilisateursModel extends ModelManager{
    
     public function __construct( $name,$firstName,$mail,$adress,$tel,$date,$password,$city,$postal){
         
         
     }
    public function registerUser($name,$firstName,$mail,$adress,$tel,$date,$password,$city,$postal){
        $query="INSERT INTO `Utilisateurs` ( `nom_ut`, `prenom_ut`, `mail_ut`, `adresse_ut`, `tel_ut`, `date_ut`, `mdp_ut`, `ville_ut`, `codeP_ut`) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?);";
       $user=$this-> queryOne($query,[$name,$firstName,$mail,$adress,$tel,$date,$password,$city,$postal]);
       return $user;
    }
}