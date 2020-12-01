<?php

class UtilisateursModel extends ModelManager{
    
     
    public function registerUser($name,$firstName,$mail,$adress,$tel,$date,$password,$city,$postal){
        $query="INSERT INTO `Utilisateurs` (id_ut, `nom_ut`, `prenom_ut`, `mail_ut`, `adresse_ut`, `tel_ut`, `date_ut`, `mdp_ut`, `ville_ut`, `codeP_ut`) VALUES ( NULL,?, ?, ?, ?, ?, ?, ?, ?, ?);";
       
        $this->query($query,[$name,$firstName,$mail,$adress,$tel,$date,$password,$city,$postal]);
       
    }
    public function getUser($email){
        $util="SELECT id_ut,`mdp_ut`,`mail_ut` FROM `Utilisateurs` WHERE mail_ut = ?";
        
        $test=$this-> queryOne($util,[$email]);
        return $test;
    }
}