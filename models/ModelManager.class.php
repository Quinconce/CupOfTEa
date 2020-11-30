<?php

abstract class ModelManager{
    private $bdd;
    
    //contructeur --> connection a la bdd
    public function __construct(){
        $this->bdd = new PDO('mysql:host=localhost;dbname=live-37_mohamedbel_CupOfTea;charset=utf8','mohamedbel','551c6980MmExOWM4NjRlYTMxNjJjNDJhOTY5N2Yy69de21ef');
    }
    public function queryOne($query,array $params = []){
        //methode qui va chercher UNE donnée en BDD
        $query = $this->bdd->prepare($query);
        $query ->execute($params);
        $result = $query->fetch();
        return $result;
        
        
    }
    
     public function queryAll($query,array $params = []){
        //methode qui va chercher UNE donnée en BDD
        $query = $this->bdd->prepare($query);
        $query ->execute($params);
        $results = $query->fetchAll();
        return $results;
        
        
    }
}


